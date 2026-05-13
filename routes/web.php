<?php

use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\AjaxController;
use Illuminate\Support\Facades\Route;

Route::domain(config('app.frontend_domain'))->group(function () {
    Route::middleware(['minify.html'])->group(function () {
        Route::get('/', [PageController::class, 'home'])->name('get.home');
        // Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('get.privacyPolicy');
        Route::get('/about', [PageController::class, 'about'])->name('get.about');
        Route::get('/contact', [PageController::class, 'contact'])->name('get.contact');
        //Route::get('/blogs', [PageController::class, 'blogs'])->name('get.blogs');
        // Route::get('/blogs/{slug}', [PageController::class, 'blogView'])->name('get.blogView');
        // Route::get('/services', [PageController::class, 'services'])->name('get.services');
        Route::get('/services/{slug}', [PageController::class, 'serviceView'])->name('get.serviceView');
        Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('get.sitemap');


        Route::prefix('channel/api/v1')->group(function () {
            Route::post('/postForm', [AjaxController::class, 'postForm'])->name('post.postForm');
            Route::post('/sendContactForm', [AjaxController::class, 'sendContactForm'])->name('post.sendContactForm');

        });


        Route::fallback(function () {
            return response()->view('errors.404', [], 404);
        });
    });
});
