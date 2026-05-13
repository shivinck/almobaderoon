<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::macro('cdn', function ($path) {
            $baseUrl = env('APP_CDN_URL');
            return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
        });

        URL::macro('asset', function ($path) {
            $baseUrl = env('APP_URL');
            return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
        });

        URL::macro('webcdn', function ($path) {
            $baseUrl = env('APP_CDN_URL');
            $minifiedPath = preg_replace('/(\.css|\.js)$/', '.min$1', $path);
            $assetPath = app()->environment('production') ? $minifiedPath : $path;
            return rtrim($baseUrl, '/') . '/' . ltrim($assetPath, '/');
        });

        URL::macro('subdomain', function ($subdomain, $routeName = null, $parameters = [], $secure = true) {

            $route = app('router')->getRoutes()->getByName($routeName);
            $urlComponents = parse_url(env('APP_URL'));

            if (isset($urlComponents['host'])) {
                $urlComponents['host'] = $subdomain . '.' . $urlComponents['host'];
            }

            return (isset($urlComponents['scheme']) ? $urlComponents['scheme'] . '://' : '') .
                   (isset($urlComponents['host']) ? $urlComponents['host'] : '') .
                   (isset($urlComponents['port']) ? ':' . $urlComponents['port'] : '') .
                   (isset($route) ? '/' . $route->uri() : '') .
                   (isset($urlComponents['query']) ? '?' . $urlComponents['query'] : '');
        });
    }
}
