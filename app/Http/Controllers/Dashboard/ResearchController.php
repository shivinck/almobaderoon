<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ResearchGuide;
use App\Models\ResearchScholar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResearchController extends Controller
{
    public function createGuide(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'faculty_id' => 'required|string',
            ]);
            $guide = new ResearchGuide();
            $guide->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['faculty_id', 'sort_order'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $guide->$attribute = $request->get($attribute);
                }
            }
            $guide->status = ResearchGuide::STATUS_UNPUBLISHED;
            $guide->save();

            if ($guide) {
                session()->flash('notification', 'New Guide has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.research.guides');
                $response['message'] = "New Guide has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function createScholar(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'name' => 'required|string',
                'image' => 'required|string',
                'faculty_id' => 'required|string',
            ]);
            $scholar = new ResearchScholar();
            $scholar->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['name', 'faculty_id', 'image', 'area', 'year', 'topic', 'description', 'sort_order'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $scholar->$attribute = $request->get($attribute);
                }
            }
            $scholar->status = ResearchScholar::STATUS_UNPUBLISHED;
            $scholar->save();

            if ($scholar) {
                session()->flash('notification', 'New Scholar has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.research.scholars');
                $response['message'] = "New Scholar has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateScholar(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'name' => 'required|string',
                'image' => 'required|string',
                'faculty_id' => 'required|string',
            ]);
            $scholar = ResearchScholar::findOrFail($request->id);

            // Only set the attributes if they are not empty strings
            $attributes = ['name', 'faculty_id', 'image', 'area', 'year', 'topic', 'description', 'sort_order'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $scholar->$attribute = $request->get($attribute);
                }
            }
            $scholar->save();

            if ($scholar) {
                session()->flash('notification', 'Scholar has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.research.scholars');
                $response['message'] = "Scholar has been updated successfully";
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
