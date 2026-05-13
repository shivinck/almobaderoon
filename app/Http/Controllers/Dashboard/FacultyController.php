<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Service;
use App\Models\OutreachGuide;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    public function postFaculty(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'name' => 'required|string'
            ]);
            $service = new Service();
            $service->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = [
                'name',
                'title',
                'short_description',
                'content',
                'seo_tags',
                'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $service->$attribute = $request->get($attribute);
                }
            }
            $service->status = Service::STATUS_UNPUBLISHED;
            $service->save();

            if ($service) {
                session()->flash('notification', 'New Service has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.services');
                $response['message'] = "New Service has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function editFaculty(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'name' => 'required|string'
            ]);
            $faculty = Service::findOrFail($request->id);

            // Only set the attributes if they are not empty strings
            $attributes = [
                'name',
                'title',
                'short_description',
                'content',
                'seo_tags',
                'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $faculty->$attribute = $request->get($attribute);
                }
            }
            $faculty->save();

            if ($faculty) {
                session()->flash('notification', 'Service has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.services');
                $response['message'] = "Service has been updated successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function createOutreachGuide(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'faculty_id' => 'required|string',
            ]);
            $guide = new OutreachGuide();
            $guide->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['faculty_id', 'sort_order'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $guide->$attribute = $request->get($attribute);
                }
            }
            $guide->status = OutreachGuide::STATUS_UNPUBLISHED;
            $guide->save();

            if ($guide) {
                session()->flash('notification', 'New Faculty has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.facultyOutreach');
                $response['message'] = "New Faculty has been created successfully";
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
