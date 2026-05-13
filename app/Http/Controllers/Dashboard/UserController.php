<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function postuser(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:admin_users',
                'password' => 'required|string|min:8',
                'role_id' => 'required|exists:roles,id',
            ]);

            $attributes = [
                'name' => $request->name,
                'designation' => $request->designation,
                'about' => $request->about,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'status' => AdminUser::STATUS_PENDING,
            ];

            // Filter out empty string attributes
            $filteredAttributes = array_filter($attributes, function ($value) {
                return $value !== '';
            });

            $adminUser = AdminUser::create($filteredAttributes);

            if ($adminUser) {
                Log::info("New admin user created", ['loginID' => Auth::guard('admin')->user()->id, 'userId' => $adminUser->id, 'name' => $adminUser->name]);
                session()->flash('notification', 'New User has been created successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.userManagement');
                $response['message'] = "New User has been created successfully";
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

    public function updateStatus(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string|max:255',
                'status' => 'required|string|max:255',
            ]);

            $adminUser = AdminUser::findOrFail($request->id);
            $adminUser->status = $request->status;
            $adminUser->save();

            // Trigger an event after the status is updated
            // event(new AdminUserStatusUpdated($adminUser, $currentUser));

            if ($adminUser) {
                Log::info("AdminUser status updated", ['loginID' => Auth::guard('admin')->user()->id, 'userId' => $adminUser->id, 'status' => $adminUser->status]);
                session()->flash('notification', 'User status has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.userManagement');
                $response['message'] = "User status has been updated successfully.";
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

    public function postUserProfile(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('admin_users')->ignore($request->id),
                ],
                'role_id' => 'required|exists:roles,id',
            ]);

            $adminUser = AdminUser::findOrFail($request->id);
            $adminUser->name = $request->name;
            $adminUser->designation = $request->designation;
            $adminUser->about = $request->about;
            $adminUser->email = $request->email;
            $adminUser->role_id = $request->role_id;
            $adminUser->save();

            // Trigger an event after the status is updated
            // event(new AdminUserStatusUpdated($adminUser, $currentUser));

            if ($adminUser) {
                Log::info("AdminUser status updated", ['loginID' => Auth::guard('admin')->user()->id, 'userId' => $adminUser->id, 'status' => $adminUser->status]);
                session()->flash('notification', 'User profile has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.userManagement');
                $response['message'] = "User profile has been updated successfully.";
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

    public function removeMFA(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string|max:255',
            ]);

            $adminUser = AdminUser::findOrFail($request->id);
            $adminUser->google2fa_secret = null;
            $adminUser->save();

            if ($adminUser) {
                Log::info("MFA Removed", ['loginID' => Auth::guard('admin')->user()->id, 'userId' => $adminUser->id]);
                session()->flash('notification', 'User MFA has been removed successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.userManagement');
                $response['message'] = "User MFA has been removed successfully.";
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

    public function postUserPassword(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string|max:255',
                'password' => 'required|string|max:255|confirmed',
            ]);

            $adminUser = AdminUser::findOrFail($request->id);
            $adminUser->password = Hash::make($request->password);
            $adminUser->save();

            if ($adminUser) {
                Log::info("MFA Removed", ['loginID' => Auth::guard('admin')->user()->id, 'userId' => $adminUser->id]);
                session()->flash('notification', 'User password has been updated successfully.');
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.userManagement');
                $response['message'] = "User password has been updated successfully.";
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
