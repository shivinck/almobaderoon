<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{

    public function updateProfile(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'name' => 'required|string|max:255'
            ]);

            $userID = Auth::guard('admin')->user()->id;
            $user = AdminUser::findOrFail($userID);

            // Only set the attributes if they are not empty strings
            $attributes = ['name', 'about', 'avatar'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $user->$attribute = $request->get($attribute);
                }
            }

            $user->save();

            if ($user) {
                session()->flash('notification', 'Your profile has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.profile');
                $response['message'] = "Your profile has been updated successfully.";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            Log::error("Failed to update AdminUser status", ['error' => $e->getMessage()]);
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postPassword(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'current_password' => 'required|string|max:255',
                'npassword' => 'required|string|max:255|confirmed',
            ]);

            $userID = Auth::guard('admin')->user()->id;
            $user = AdminUser::findOrFail($userID);

            // Check if the provided current password matches the stored password
            if (!Hash::check($request->current_password, $user->password)) {
                $response['handler']['type'] = 'toast-error';
                $response['message'] = "Current password does not match.";
                return response()->json($response);
            }

            // Update to the new password
            $user->password = Hash::make($request->password);
            $user->save();

            if ($user) {
                session()->flash('notification', 'Your password has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.profile');
                $response['message'] = "Your password has been updated successfully.";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            Log::error("Failed to update AdminUser status", ['error' => $e->getMessage()]);
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }
}
