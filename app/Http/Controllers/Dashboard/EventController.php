<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Media;
use App\Models\EventGallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function postEvent(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'category' =>'required|string',
                'label' =>'required|string',
                'title' => 'required|string',
                'image' => 'required|string',
                'from_date' => 'required|string'
            ]);
            $event = new Event();
            $event->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['category', 'label', 'title', 'location', 'from_date', 'time', 'end_date', 'short_description', 'content', 'joining_url', 'image', 'sort_order', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $event->$attribute = $request->get($attribute);
                }
            }
            $event->status = Event::STATUS_UNPUBLISHED;
            $event->save();

            if ($event) {
                session()->flash('notification', 'New event has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.events');
                $response['message'] = "New event has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postMedia(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'url' =>'required|string',
            ]);
            $event = new Media();
            $event->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['url'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $event->$attribute = $request->get($attribute);
                }
            }
            $event->status = Media::STATUS_PUBLISHED;
            $event->save();

            if ($event) {
                session()->flash('notification', 'New Image has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.images');
                $response['message'] = "New Image has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }



    public function updateEvent(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' =>'required|string',
                'category' =>'required|string',
                'label' =>'required|string',
                'title' => 'required|string',
                'image' => 'required|string',
                'from_date' => 'required|string'
            ]);
            $event = Event::findOrFail($request->id);;

            // Only set the attributes if they are not empty strings
            $attributes = ['category', 'label', 'title', 'location', 'from_date', 'time', 'end_date', 'short_description', 'content', 'joining_url', 'image', 'sort_order', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $event->$attribute = $request->get($attribute);
                }
            }
            $event->save();

            if ($event) {
                session()->flash('notification', 'Event has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.events');
                $response['message'] = "Event has been updated successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postMedia2(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'media' =>'required|string',
                'event_id' =>'required|string'
            ]);

            $event = Event::findOrFail($request->event_id);

            $eventGallery = new EventGallery();
            $eventGallery->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['event_id', 'media' , 'title'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $eventGallery->$attribute = $request->get($attribute);
                }
            }
            $eventGallery->status = Event::STATUS_UNPUBLISHED;
            $event->galleries()->save($eventGallery);
            $event->gallery_enabled = true;
            $event->save();

            if ($event) {
                session()->flash('notification', 'New Media has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.events');
                $response['message'] = "New Media has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }
}
