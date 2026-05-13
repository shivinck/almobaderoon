<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Announcement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function postAnnouncement(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'title' => 'required|string',
                'image' => 'required|string'
            ]);
            $announcement = new Announcement();
            $announcement->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['title', 'short_description', 'content', 'image', 'sort_order', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $announcement->$attribute = $request->get($attribute);
                }
            }
            $announcement->status = Announcement::STATUS_UNPUBLISHED;
            $announcement->save();

            if ($announcement) {
                session()->flash('notification', 'New Announcement has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.announcements');
                $response['message'] = "New Announcement has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateAnnouncement(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'title' => 'required|string',
                'image' => 'required|string'
            ]);
            $announcement = Announcement::findOrFail($request->id);

            $attributes = ['title', 'short_description', 'content', 'image', 'sort_order', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $announcement->$attribute = $request->get($attribute);
                }
            }
            $announcement->save();

            if ($announcement) {
                session()->flash('notification', 'Announcement has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.announcements');
                $response['message'] = "Announcement has been updated successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }
}
