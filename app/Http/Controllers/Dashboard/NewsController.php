<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Meta;
use App\Models\Campaign;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function postNews(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'title' => 'required|string',
                'image' => 'required|string',
            ]);
            $news = new News();
            $news->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = ['title', 'short_description', 'content', 'image', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $news->$attribute = $request->get($attribute);
                }
            }
            $news->status = News::STATUS_UNPUBLISHED;
            $news->save();

            if ($news) {
                session()->flash('notification', 'New Blog has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.news');
                $response['message'] = "New Blog has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateNews(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'title' => 'required|string',
                'image' => 'required|string',
            ]);
            $news = News::findOrFail($request->id);

            // Only set the attributes if they are not empty strings
            $attributes = ['title', 'short_description', 'content', 'image', 'seo_tags', 'tags'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $news->$attribute = $request->get($attribute);
                }
            }
            $news->save();

            if ($news) {
                session()->flash('notification', 'Blog has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.news');
                $response['message'] = "Blog has been updated successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postSeo(Request $request)
    {
        $response = app('response');
        try {

            $data = $request->input('pages');

            foreach ($data as $id => $content) {
                $page = Meta::find($id);
                if ($page) {
                    $page->content = $content;
                    $page->save();
                }
            }

            if ($data) {
                session()->flash('notification', 'Information has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.seo');
                $response['message'] = "Information has been updated successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postCompaign(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'status' => 'required|string'
            ]);
            $compaign = Campaign::findOrFail($request->id);
            $compaign->status = $request->status;
            $compaign->save();

            if ($compaign) {
                session()->flash('notification', 'Compaign has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.campaigns');
                $response['message'] = "Compaign has been updated successfully";
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
