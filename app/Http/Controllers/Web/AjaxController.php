<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AjaxController extends Controller
{

    public function __construct()
    {
    }

    public function postContactForm(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'g-recaptcha-response' => 'required|string',
                'fname' => 'required|string',
                'lname' => 'required|string',
                'email' => 'required|string|email',
                'phone' => 'required|string',
                'message' => 'required|string',
            ]);

            $gResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);
            $recaptchaResponseBody = json_decode($gResponse->getBody());

            if (!$recaptchaResponseBody->success) {
                throw new Exception('reCAPTCHA verification failed. Please try again.');
            }

            $data = $request->only(['fname', 'lname', 'phone', 'email', 'message']);
            Mail::to(env('ADMIN_EMAIL'))->send(new \App\Mail\ContactFormMail($data));

            $response['handler']['type'] = "toast";
            $response['handler']['route'] = "";
            $response['message'] = "";
            return response()->json($response);

        } catch (Exception $e) {
            $response['handler']['type'] = 'toast-error';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function postForm(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'service_for' => 'required|string',
                'service' => 'required|string',
                'contact_fname' => 'required|string',
                'contact_lname' => 'required|string',
                'contact_email' => 'required|string|email',
                'contact_phone' => 'required|string',
            ]);

            $camp = new Campaign();

            $attributes = ['service_for', 'service', 'contact_fname', 'contact_lname', 'contact_email', 'contact_phone'];
            foreach ($attributes as $attribute) {
                if ($request->get($attribute) !== '') {
                    $camp->$attribute = $request->get($attribute);
                }
            }
            $camp->status = Campaign::STATUS_SUBMITTED;
            $camp->save();


            $data = [
                'name' => $request->get('contact_fname'). ' ' . $request->get('contact_lname'),
                'service_for' => $request->get('service_for'),
                'service' =>  $request->get('service'),
                'email' => $request->get('contact_email'),
                'phone' => $request->get('contact_phone')
            ];

            $to_email = $request->get('contact_email');

            // Send email 1
            Mail::send('emails.notification', $data, function ($message) use ($data, $to_email) {
                $message->to("$to_email")
                    ->subject("We've received your home care service request - agingcaretampa.com")
                    ->from("notifications@agingcaretampa.com", "Notifications");
            });

            // Send email 2
            Mail::send('emails.request', $data, function ($message) use ($data) {
                $message->to(env('ADMIN_EMAIL'))
                    ->subject("New home care request received - agingcaretampa.com")
                    ->from("notifications@agingcaretampa.com", "Notifications");
            });

            //$data = $request->only(['service_for', 'service', 'contact_fname', 'contact_lname',  'contact_email', 'contact_phone']);

            $response['handler']['type'] = "toast";
            $response['handler']['route'] = "";
            $response['message'] = "";
            return response()->json($response);

        } catch (Exception $e) {
            $response['handler']['type'] = 'toast-error';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function sendContactForm(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'user_msg' => $request->input('message'),
        ];

        // Send email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to(env('ADMIN_EMAIL'))
                ->subject('New Contact Form Submission')
                ->from("notifications@agingcaretampa.com", "Notifications");
        });

        return response()->json(['message' => 'Thank you for contacting us!', 'success' => true], 200);
    }
}
