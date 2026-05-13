<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class JournalController extends Controller
{
    public function postJournal(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'title' => 'required|string',
                'author' => 'required|string',
                'published_on' => 'required|string',
                'document' => 'required|string',
            ]);
            $journal = new Journal();
            $journal->admin_user_id = Auth::guard('admin')->user()->id;

            // Only set the attributes if they are not empty strings
            $attributes = [
                'published_on', 'title', 'description', 'author', 'document',
                'image', 'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $journal->$attribute = $request->get($attribute);
                }
            }
            $journal->status = Journal::STATUS_UNPUBLISHED;
            $journal->save();

            if ($journal) {
                session()->flash('notification', 'New Journal has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.journals');
                $response['message'] = "New Journal has been created successfully";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function updateJournal(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'title' => 'required|string',
                'author' => 'required|string',
                'published_on' => 'required|string',
                'document' => 'required|string',
            ]);
            $journal = Journal::findOrFail($request->id);

            $attributes = [
                'published_on', 'title', 'description', 'author', 'document',
                'image', 'sort_order',
            ];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $journal->$attribute = $request->get($attribute);
                }
            }
            $journal->save();

            if ($journal) {
                session()->flash('notification', value: 'Journal been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route(name: 'get.dashboard.journals');
                $response['message'] = "Journal has been updated successfully";
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
