<?php

use App\Http\Controllers\Dashboard\AccountController;
use App\Http\Controllers\Dashboard\AnnouncementController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\CalendarController;
use App\Http\Controllers\Dashboard\CommonController;
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\FacultyController;
use App\Http\Controllers\Dashboard\JournalController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\ResearchController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;

Route::domain(config('app.dashboard_domain'))->group(function () {

    Route::get('/', function () {
        return Redirect::route('get.dashboard.home');
    });

    Route::group(['middleware' => ['admin.auth', '2fa']], function () {
        Route::get('/home', [PageController::class, 'home'])->name('get.dashboard.home');
        Route::prefix('/account')->group(function () {
            Route::get('/profile', [PageController::class, 'accountProfile'])->name('get.dashboard.profile');
            Route::get('/settings', [PageController::class, 'accountSettings'])->name('get.dashboard.settings');
        });

        Route::prefix('/blogs')->group(function () {
            Route::get('/', [PageController::class, 'news'])->name('get.dashboard.news');
            Route::get('/new', [PageController::class, 'newNews'])->name('get.dashboard.newNews');
            Route::get('/view/{id}', [PageController::class, 'viewNews'])->name('get.dashboard.viewNews');
        });
        Route::prefix('/services')->group(function () {
            Route::get('/', [PageController::class, 'services'])->name('get.dashboard.services');
            Route::get('/new', [PageController::class, 'newService'])->name('get.dashboard.newService');
            Route::get('/view/{id}', [PageController::class, 'viewService'])->name('get.dashboard.viewService');
        });
        Route::prefix('/seo')->group(function () {
            Route::get('/', [PageController::class, 'seo'])->name('get.dashboard.seo');
        });

        Route::prefix('/images')->group(function () {
            Route::get('/', [PageController::class, 'images'])->name('get.dashboard.images');
        });




        Route::prefix('/user-management')->group(function () {
            Route::get('/', [PageController::class, 'userManagement'])->name('get.dashboard.userManagement');
            Route::get('/new', [PageController::class, 'newUser'])->name('get.dashboard.newUser');
        });
        Route::prefix('/roles')->group(function () {
            Route::get('/', [PageController::class, 'roles'])->name('get.dashboard.roles');
        });
        Route::prefix('/campaigns')->group(function () {
            Route::get('/', [PageController::class, 'campaigns'])->name('get.dashboard.campaigns');
        });



    });

    Route::prefix('auth')->group(function () {
        Route::get('/login', [PageController::class, 'login'])->name('get.dashboard.login');
        Route::get('/session/logout', [PageController::class, 'logout'])->name('get.dashboard.logout');
    });

    Route::group(['middleware' => ['admin.auth', '2fa']], function () {
        Route::prefix('auth')->group(function () {
            Route::get('/enable2fa', [PageController::class, 'enable2fa'])->name('get.dashboard.enable2fa');
            Route::get('/verify2fa', [PageController::class, 'verify2fa'])->name('get.dashboard.verify2fa');
        });
    });

    Route::prefix('channel/ajax')->group(function () {
        Route::post('/login', [AuthController::class, 'login'])->name('post.dashboard.login');
    });

    Route::prefix('channel/ajax')->middleware(['admin.auth'])->group(function () {
        Route::post('/verify2fa', [AuthController::class, 'verify2fa'])->name('post.dashboard.verify2fa');
        Route::post('/enable2fa', [AuthController::class, 'enable2fa'])->name('post.dashboard.enable2fa');
    });

    Route::prefix('channel/ajax')->middleware(['admin.auth', '2fa'])->group(function () {

        Route::post('/getPostCounts', [CommonController::class, 'getPostCounts'])->name('get.dashboard.getPostCounts');
        Route::post('/uploadImage', [CommonController::class, 'uploadImage'])->name('post.dashboard.uploadImage');
        Route::post('/uploadDocument', [CommonController::class, 'uploadDocument'])->name('post.dashboard.uploadDocument');
        Route::post('/postFaculty', [FacultyController::class, 'postFaculty'])->name('post.dashboard.faculty');
        Route::post('/editFaculty', [FacultyController::class, 'editFaculty'])->name('update.dashboard.service');
        Route::post('/postFaculty', [FacultyController::class, 'postFaculty'])->name('post.dashboard.service');
        Route::post('/postNews', [NewsController::class, 'postNews'])->name('post.dashboard.news');
        Route::post('/publishPost', [CommonController::class, 'publishPost'])->name('post.dashboard.publishPost');
        Route::post('/archivePost', [CommonController::class, 'archivePost'])->name('post.dashboard.archivePost');
        Route::post('/postUser', [UserController::class, 'postUser'])->name('post.dashboard.user');
        Route::post('/updateStatus', [UserController::class, 'updateStatus'])->name('update.dashboard.userStatus');
        Route::post('/newJournal', [JournalController::class, 'postJournal'])->name('post.dashboard.journal');
        Route::post('/userPassword', [UserController::class, 'postUserPassword'])->name('post.dashboard.userPassword');
        Route::post('/userProfile', [UserController::class, 'postUserProfile'])->name('post.dashboard.userProfile');
        Route::post('/userRemoveMFA', [UserController::class, 'removeMFA'])->name('post.dashboard.removeMFA');

        Route::post('/postCourse', [CourseController::class, 'postCourse'])->name('post.dashboard.course');

        Route::prefix('news')->group(function () {
            Route::post('/update', [NewsController::class, 'updateNews'])->name('update.dashboard.news');
        });

        Route::prefix('journal')->group(function () {
            Route::post('/update', [JournalController::class, 'updateJournal'])->name('update.dashboard.journal');
        });

        Route::prefix('compaign')->group(function () {
            Route::post('/update', [NewsController::class, 'postCompaign'])->name('post.dashboard.compaigns');
        });

        Route::prefix('account')->group(function () {
            Route::post('/profile', [AccountController::class, 'updateProfile'])->name('update.dashboard.profile');
            Route::post('/password', [AccountController::class, 'postPassword'])->name('update.dashboard.password');
        });

        Route::prefix('research')->group(function () {
            Route::post('/guide', [ResearchController::class, 'createGuide'])->name('post.dashboard.research.guide');
            Route::post('/scholar', [ResearchController::class, 'createScholar'])->name('post.dashboard.research.scholar');
            Route::post('/scholar/update', [ResearchController::class, 'updateScholar'])->name('update.dashboard.research.scholar');
        });

        Route::prefix('outreach')->group(function () {
            Route::post('/guide', [FacultyController::class, 'createOutreachGuide'])->name('post.dashboard.outreachGuide');
        });

        Route::prefix('announcements')->group(function () {
            Route::post('/', [AnnouncementController::class, 'postAnnouncement'])->name('post.dashboard.announcement');
            Route::post('/update', [AnnouncementController::class, 'updateAnnouncement'])->name('update.dashboard.announcement');
        });

        Route::prefix('services')->group(function () {
            Route::post('/', [EventController::class, 'postEvent'])->name('post.dashboard.event');
            Route::post('/', [EventController::class, 'postMedia'])->name('post.dashboard.media');
            Route::post('/update', [EventController::class, 'updateEvent'])->name('update.dashboard.event');
        });
        Route::prefix('gallery')->group(function () {
            Route::post('/media', [EventController::class, 'postMedia'])->name('post.dashboard.media');
        });
        Route::prefix('calendar')->group(function () {
            Route::post('/', [CalendarController::class, 'postCalendar'])->name('post.dashboard.calendar');
            Route::post('/update', [CalendarController::class, 'updateCalendar'])->name('update.dashboard.calendar');
        });

        Route::prefix('seo')->group(function () {
            Route::post('/', [NewsController::class, 'postSeo'])->name('post.dashboard.seo');
        });


    });

    // Route::get('/index', [PageController::class, 'index'])->name('get.dashboard.index');

    // Route::group(['middleware' => ['admin.auth']],function() {
    //     Route::get('/home', [PageController::class, 'home'])->name('get.dashboard.home');
    //     Route::get('/web/session/logout', [AuthController::class, 'logout'])->name('get.dashboard.logout');
    // });

    // Route::group(['middleware' => ['role:admin']], function () {
    //     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // });
});
