<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $response = app('response');

        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $response['form'] = $request->get('form');

            $credentials = $request->only('email', 'password');
            $credentials['status'] = AdminUser::STATUS_ACTIVE;

            if (Auth::guard('admin')->attempt($credentials)) {
                $response['handler']['type'] = 'redirect';
                $request->session()->put('2fa_verified', true);
                $response['handler']['route'] = route('get.dashboard.home');
                return response()->json($response);
            }
            throw new Exception('Invalid credentials or account is not active.');
        } catch (ModelNotFoundException $e) {
            $response['handler']['type'] = 'toast-error';
            $response['handler']['route'] = route('get.dashboard.login');
            $response['message'] = "Invalid credentials or account is not active.";
            return response()->json($response);
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast-error';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function enable2fa(Request $request)
    {
        $response = app('response');

        try {
            $user = Auth::guard('admin')->user();
            $google2fa = new \PragmaRX\Google2FA\Google2FA();

            $valid = $google2fa->verifyKey($request->input('google2fa_secret'), $request->input('2fa_code'));

            if ($valid) {
                $user->google2fa_secret = $request->input('google2fa_secret');
                $user->save();
                $request->session()->put('2fa_verified', true);

                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.home');
                return response()->json($response);
            } else {
                $response['handler']['type'] = 'toast-error';
                $response['message'] = "The provided 2FA code is incorrect.";
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function verify2fa(Request $request)
    {
        $response = app('response');

        try {
            $user = Auth::guard('admin')->user();
            $google2fa = new \PragmaRX\Google2FA\Google2FA();

            $valid = $google2fa->verifyKey($user->google2fa_secret, $request->input('2fa_code'));

            if ($valid) {
                $request->session()->put('2fa_verified', true);
                $response['handler']['type'] = 'redirect';
                $response['handler']['route'] = route('get.dashboard.home');
                return response()->json($response);
            } else {
                $response['handler']['type'] = 'toast-error';
                $response['message'] = 'The provided 2FA code is incorrect.';
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
