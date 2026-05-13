<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\OutreachGuide;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\Faculty;
use App\Models\News;
use App\Models\Journal;
use App\Models\Media;
use App\Models\AdminUser;
use App\Models\Course;
use App\Models\Service;
use App\Models\ResearchGuide;
use App\Models\ResearchScholar;
use App\Models\Announcement;
use App\Models\Campaign;

class CommonController extends Controller
{
    public function uploadImage(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'imageData' => 'required|string',
                'width' => 'required',
            ]);
            $base64Data = $request->get('imageData');
            $user = Auth::guard('admin')->user();
            $year = date("Y");
            $month = date("m");
            $day = date("d");

            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Data));
            $filename = "docuokimages_{$request->width}_" . time() . ".jpg";
            $storagePath = storage_path("app/public/uploads/{$user->id}/{$year}{$month}{$day}/");
            if (!File::exists($storagePath)) {
                File::makeDirectory($storagePath, 0755, true);
            }
            file_put_contents($storagePath . $filename, $imageData);
            $publicPath = asset("doc-content/uploads/{$user->id}/{$year}{$month}{$day}/{$filename}");

            $sizes = [75, 200, intval($request->width)];
            foreach ($sizes as $size) {
                $resizedImage = Image::make($imageData)->resize($size, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $resizedFilename = str_replace($request->width, $size, $filename);
                $resizedImage->save($storagePath . $resizedFilename);
            }

            if ($filename) {
                $response['handler']['type'] = 'custom-invocation';
                $response['message'] = $publicPath;
                return response()->json($response);
            } else {
                $response['handler']['type'] = 'toast-error';
                $response['message'] = 'Something went wrong. Please try again.';
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function uploadDocument(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'fileData' => 'required|string',
                'document' => 'pdf',
            ]);

            $base64Data = $request->get('fileData');
            $user = Auth::guard('admin')->user();
            $year = date("Y");
            $month = date("m");
            $day = date("d");

            $pdfData = base64_decode(preg_replace('#^data:application/pdf;base64,#i', '', $base64Data));

            $filename = $request->name ?? "document_" . time() . ".pdf";


            $storagePath = storage_path("app/public/uploads/{$user->id}/{$year}{$month}{$day}/");

            if (!File::exists($storagePath)) {
                File::makeDirectory($storagePath, 0755, true);
            }

            file_put_contents($storagePath . $filename, $pdfData);

            $frontendDomain = env('APP_URL', config('app.url'));
            $publicPath = "{$frontendDomain}/doc-content/uploads/{$user->id}/{$year}{$month}{$day}/{$filename}";

            if ($filename) {
                $response['handler']['type'] = 'custom-invocation';
                $response['message'] = $publicPath;
                return response()->json($response);
            } else {
                $response['handler']['type'] = 'toast-error';
                $response['message'] = 'Something went wrong. Please try again.';
                return response()->json($response);
            }
        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }


    public function publishPost(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'type' => 'required|string',
                'redirect' => 'required|string',
            ]);

            $models = [
                'faculty' => Faculty::class,
                'news' => News::class,
                'journal' => Journal::class,
                'user' => AdminUser::class,
                'course' => Course::class,
                'researchGuide' => ResearchGuide::class,
                'researchScholar' => ResearchScholar::class,
                'service' => Service::class,
                'announcement' => Announcement::class,
                'calendar' => Calendar::class,
                'outreachGuide' => OutreachGuide::class,
                'media' => Media::class,
            ];

            $faculty = $models[$request->type]::find($request->get('id'));
            $faculty->status = $faculty->status == 'published' ? 'unpublished' : 'published';
            $faculty->save();

            session()->flash('notification', 'Post has been successfully published.');
            $response['handler']['type'] = 'redirect';
            $response['handler']['route'] = $request->redirect;
            $response['message'] = "Post has been successfully published.";
            return response()->json($response);

        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function archivePost(Request $request)
    {
        $response = app('response');
        try {
            $request->validate([
                'id' => 'required|string',
                'type' => 'required|string',
                'redirect' => 'required|string',
            ]);

            $models = [
                'faculty' => Faculty::class,
                'news' => News::class,
                'journal' => Journal::class,
                'user' => AdminUser::class,
                'course' => Course::class,
                'researchGuide' => ResearchGuide::class,
                'service' => Service::class,
                'announcement' => Announcement::class,
                'calendar' => Calendar::class,
                'outreachGuide' => OutreachGuide::class,
                'campaign' => Campaign::class,
                'media' => Media::class,
            ];

            $faculty = $models[$request->type]::find($request->get('id'));
            $faculty->delete();

            session()->flash('notification', 'Post has been successfully archived.');
            $response['handler']['type'] = 'redirect';
            $response['handler']['route'] = $request->redirect;
            $response['message'] = "Post has been successfully archived.";
            return response()->json($response);

        } catch (Exception $e) {
            // General exception handler
            $response['handler']['type'] = 'toast';
            $response['message'] = $e->getMessage();
            return response()->json($response);
        }
    }

    public function getPostCounts(Request $request)
{
    $response = [];
    try {
        // Count records for each model
        $facultyCount = sprintf('%03d', Faculty::where('status', 'published')->count());
        $eventCount = sprintf('%03d', Event::where('status', 'published')->count());
        $courseCount = sprintf('%03d', Course::where('status', 'published')->count());
        $researchGuideCount = sprintf('%03d', ResearchGuide::where('status', 'published')->count());
        $announcementCount = sprintf('%03d', Announcement::where('status', 'published')->count());
        $journalCount = sprintf('%03d', Journal::where('status', 'published')->count());
        $newsCount = sprintf('%03d', News::where('status', 'published')->count());
        $researchScholarCount = sprintf('%03d', ResearchScholar::where('status', 'published')->count());

        // Prepare data array
        $data = [
            'facultyCount' => $facultyCount,
            'eventCount' => $eventCount,
            'courseCount' => $courseCount,
            'researchGuideCount' => $researchGuideCount,
            'announcementCount' => $announcementCount,
            'journalCount' => $journalCount,
            'newsCount' => $newsCount,
            'researchScholarCount' => $researchScholarCount,
        ];

        // Prepare response
        $response['handler']['type'] = 'custom-invocation';
        $response['message'] = $data;
        return response()->json($response);

    } catch (Exception $e) {
        // General exception handler
        $response['handler']['type'] = 'toast';
        $response['message'] = $e->getMessage();
        return response()->json($response);
    }
}
}
