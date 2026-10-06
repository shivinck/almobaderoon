<?php

use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\AjaxController;
use Illuminate\Support\Facades\Route;

//Route::domain(config('app.frontend_domain'))->group(function () {
    Route::middleware(['minify.html'])->group(function () {
        Route::get('/', [PageController::class, 'home'])->name('get.home');
        Route::get('/about', [PageController::class, 'about'])->name('get.about');
        Route::get('/contact', [PageController::class, 'contact'])->name('get.contact');
        Route::get('/blogs', [PageController::class, 'blogs'])->name('get.blogs');
        Route::get('/case-studies', [PageController::class, 'caseStudies'])->name('get.caseStudies');
        Route::get('/schedule-consulation', [PageController::class, 'scheduleConsulation'])->name('get.scheduleConsulation');
        Route::post('/schedule-consulation', [AjaxController::class, 'sendConsultationRequest'])->name('post.scheduleConsulation');
        Route::get('/liquidation', [PageController::class, 'liquidation'])->name('get.liquidation');

        // Parent service routes
        Route::get('/service/{slug}', [PageController::class, 'serviceDetail'])->name('get.service');
        Route::get('/services/{parentSlug}/{childSlug}', [PageController::class, 'childServiceDetail'])->name('get.childService');

        // Blog detail route
        Route::get('/blog/{slug}', [PageController::class, 'blogDetail'])->name('get.blogDetail');

        // Case study detail route
        Route::get('/case-study/{slug}', [PageController::class, 'caseStudyDetail'])->name('get.caseStudyDetail');

        // Contact form submission
        Route::post('/contact/send', [AjaxController::class, 'sendContactForm'])->name('post.contactForm');

        // XML sitemap
        Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('get.sitemap');

        Route::fallback(function () {
            return response()->view('errors.404', [], 404);
        });
    });
//});
