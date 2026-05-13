<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function postCourse(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'name' => 'required|string',
                'document' => 'required|string'
            ]);
            $course = new Course();
            $course->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = [
                'name', 'type', 'seats', 'duration', 'languages', 'notes', 'description', 'image', 'document',
                'seo_tags', 'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $course->$attribute = $request->get($attribute);
                }
            }
            $course->status = Course::STATUS_UNPUBLISHED;
            $course->save();

            if ($course) {
                session()->flash('notification', 'New Course has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.courses');
                $response['message'] = "New Course has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateCourse(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'name' => 'required|string',
                'document' => 'required|string'
            ]);
            $course = Course::findOrFail($request->id);

            $attributes = [
                'name', 'type', 'seats', 'duration', 'languages', 'notes', 'description', 'image', 'document',
                'seo_tags', 'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $course->$attribute = $request->get($attribute);
                }
            }
            $course->save();

            if ($course) {
                session()->flash('notification', 'Course has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.courses');
                $response['message'] = "Course has been updated successfully";
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
