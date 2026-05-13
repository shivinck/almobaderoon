<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\PermissionsHelper;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\Announcement;
use App\Models\Calendar;
use App\Models\Course;
use App\Models\Service;
use App\Models\Faculty;
use App\Models\Journal;
use App\Models\News;
use App\Models\Meta;
use App\Models\ResearchGuide;
use App\Models\ResearchScholar;
use App\Models\Role;
use App\Models\Campaign;
use App\Models\Media;
use App\Models\OutreachGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FAQRCode\Google2FA;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

    protected $isWritePermission;
    protected $isAdminPermission;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::guard('admin')->check()) {
                $adminUser = Auth::guard('admin')->user();
                $this->isWritePermission = PermissionsHelper::checkWritePermission($adminUser->role_id);
                $this->isAdminPermission = PermissionsHelper::checkAdminPermission($adminUser->role_id);

                View::share('isWritePermission', $this->isWritePermission);
                View::share('isAdminPermission', $this->isAdminPermission);
            }

            return $next($request);
        });
    }

    public function login(Request $request)
    {
        return view('dashboard.pages.login');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('notification', 'You have been successfully signed out from the dashboard.');
        return redirect(route('get.dashboard.login'))->with('success', 'You are now successfully logged out of the system.');
    }

    public function enable2fa(Request $request)
    {

        $google2fa = new Google2FA();
        $google2faSecret = $google2fa->generateSecretKey();

        $user = Auth::guard('admin')->user();
        if ($user->google2fa_secret) {
            return redirect()->intended(route('get.dashboard.verify2fa'));
        }

        $qrImage = $google2fa->getQRCodeInline(
            config('app.name'),
            Auth::guard('admin')->user()->email,
            $google2faSecret
        );
        return view('dashboard.pages.enable2fa', ['qrImage' => $qrImage, 'google2faSecret' => $google2faSecret]);
    }

    public function verify2fa(Request $request)
    {
        $user = Auth::guard('admin')->user();
        if (!$user->google2fa_secret) {
            return redirect()->intended(route('get.dashboard.enable2fa'));
        }

        return view('dashboard.pages.verify2fa', []);
    }
    public function home(Request $request)
    {
        return view('dashboard.pages.home');
    }

    public function accountProfile(Request $request)
    {
        $user = Auth::guard('admin')->user();
        return view('dashboard.pages.account', compact('user'));
    }

    public function accountSettings(Request $request)
    {
        $user = Auth::guard('admin')->user();
        return view('dashboard.pages.account', compact('user'));
    }

    public function faculties(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002) {
            $faculties = Faculty::orderBy('created_at', 'desc')->get();
        } else {
            $faculties = Faculty::where('admin_user_id', $userId)
                        ->orderBy('created_at', 'desc')
                        ->get();
        }
        return view('dashboard.pages.faculties', compact('faculties'));
    }

    public function newFaculty(Request $request)
    {
        return view('dashboard.pages.newFaculty');
    }

    public function seo(Request $request)
    {
        $pages = Meta::get();
        return view('dashboard.pages.seo', compact('pages'));
    }

    public function images(Request $request)
    {
        $images = Media::get();
        return view('dashboard.pages.images', compact('images'));
    }



    public function viewService(Request $request, String $id)
    {
        $service = Service::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewService', compact('service', 'isEdit'));
    }

    public function newService(Request $request)
    {
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.newService', compact('isEdit'));
    }


    public function news(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002) {
            $news = News::orderBy('created_at', 'desc')->get();
        } else {
            $news = News::where('admin_user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();
        }
        return view('dashboard.pages.news', compact('news'));
    }

    public function campaigns(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        $campaigns = Campaign::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.campaigns', compact('campaigns'));
    }

    public function viewNews(Request $request, String $id)
    {
        $news = News::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewNews', compact('news', 'isEdit'));
    }

    public function viewJournal(Request $request, String $id)
    {
        $journal = Journal::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewJournal', compact('journal', 'isEdit'));
    }

    public function viewCourse(Request $request, String $id)
    {
        $course = Course::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewCourse', compact('course', 'isEdit'));
    }

    public function viewCalendar(Request $request, String $id)
    {
        $calendar = Calendar::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewCalendar', compact('calendar', 'isEdit'));
    }

    public function viewAnnouncement(Request $request, String $id)
    {
        $announcement = Announcement::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewAnnouncement', compact('announcement', 'isEdit'));
    }

    public function viewEvent(Request $request, String $id)
    {
        $event = Event::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.viewEvent', compact('event', 'isEdit'));
    }

    public function newNews(Request $request)
    {
        return view('dashboard.pages.newNews');
    }

    public function services(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002) {
            $services = Service::orderBy('created_at', 'desc')->get();
        } else {
            $services = Service::where('admin_user_id', $userId)
                      ->orderBy('created_at', 'desc')
                      ->get();
        }
        return view('dashboard.pages.services', compact('services'));
    }

    public function announcements(Request $request)
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.announcements', compact('announcements'));
    }

    public function newEvent(Request $request)
    {
        return view('dashboard.pages.newEvent');
    }

    public function newAnnouncement(Request $request)
    {
        return view('dashboard.pages.newAnnouncement');
    }

    public function galleryEvents(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002) {
            $events = Event::orderBy('created_at', 'desc')->get();
        } else {
            $events = Event::where('admin_user_id', $userId)
                      ->orderBy('created_at', 'desc')
                      ->get();
        }
        return view('dashboard.pages.galleryEvents', compact('events'));
    }

    public function galleryMedias(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $medias = $event->galleries;
        return view('dashboard.pages.galleryMedias', compact('medias', 'event'));
    }

    public function userManagement(Request $request)
    {
        $users = AdminUser::get();
        $roles = Role::get();
        return view('dashboard.pages.userManagement', compact('users', 'roles'));
    }

    public function roles(Request $request)
    {
        $roles = Role::get();
        return view('dashboard.pages.roles', compact('roles'));
    }

    public function calendar(Request $request)
    {
        $users = AdminUser::get();
        $events = Calendar::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.calendar', compact('events'));
    }

    public function journals(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;
        $roleId = Auth::guard('admin')->user()->role_id;
        if ($roleId == 1000 || $roleId == 1001 || $roleId == 1002) {
            $journals = Journal::orderBy('created_at', 'desc')->get();
        } else {
            $journals = Journal::where('admin_user_id', $userId)
                        ->orderBy('created_at', 'desc'
                        )->get();
        }
        return view('dashboard.pages.journals', compact('journals'));
    }

    public function newJournal(Request $request)
    {
        return view('dashboard.pages.newJournal');
    }

    public function newCalendar(Request $request)
    {
        return view('dashboard.pages.newCalendar');
    }

    public function courses(Request $request)
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.courses', compact('courses'));
    }

    public function newCourse(Request $request)
    {
        return view('dashboard.pages.newCourse');
    }

    public function facultyOutreach(Request $request)
    {
        $faculties = OutreachGuide::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.outreachGuides', compact('faculties'));
    }

    public function newFacultyOutreach(Request $request)
    {
        $faculties = Faculty::whereDoesntHave('outreachGuides')->get();
        return view('dashboard.pages.newFacultyOutreach', compact('faculties'));
    }

    public function researchGuides(Request $request)
    {
        $faculties = ResearchGuide::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.research.guides', compact('faculties'));
    }

    public function researchScholars(Request $request)
    {
        $scholars = ResearchScholar::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.research.scholars', compact('scholars'));
    }

    public function newResearchGuide(Request $request)
    {
        $faculties = Faculty::whereDoesntHave('researchGuides')->get();
        return view('dashboard.pages.research.newGuide', compact('faculties'));
    }

    public function newResearchScholar(Request $request)
    {
        $faculties = Faculty::orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.research.newScholar', compact('faculties'));
    }

    public function viewResearchScholar(Request $request, String $id)
    {
        $faculties = Faculty::orderBy('created_at', 'desc')->get();
        $scholar = ResearchScholar::findOrFail($id);
        $isEdit = $request->query('isEdit' . false);
        return view('dashboard.pages.research.viewScholar', compact('scholar', 'isEdit', 'faculties'));
    }

}
