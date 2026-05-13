<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function postCalendar(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'title' => 'required|string',
                'from_date' => 'required|string',
                'label' => 'required|string',
            ]);
            $event = new Calendar();
            $event->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = [
                'label',
                'title',
                'slug',
                'image',
                'description',
                'from_date',
                'end_date',
                'location',
                'sort_order',
                'seo_tags',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $event->$attribute = $request->get($attribute);
                }
            }
            $event->status = Calendar::STATUS_UNPUBLISHED;
            $event->save();

            if ($event) {
                session()->flash('notification', 'New Event has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.calendar');
                $response['message'] = "New Event has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateCalendar(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'title' => 'required|string',
                'from_date' => 'required|string',
                'label' => 'required|string',
            ]);
            $event = Calendar::findOrFail($request->id);

            // Only set the attributes if they are not empty strings
            $attributes = [
                'label',
                'title',
                'slug',
                'image',
                'description',
                'from_date',
                'end_date',
                'location',
                'sort_order',
                'seo_tags',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $event->$attribute = $request->get($attribute);
                }
            }
            $event->save();

            if ($event) {
                session()->flash('notification', 'Event has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.calendar');
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


}
