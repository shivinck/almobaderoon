<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('response', function ($app) {
            return [
                'status' => true,
                'data' => [],
                'handler' => [
                    'type' => '',
                    'route' => url()->current()
                ],
                'message' => null,
                'form' => null,
                'request_id' => null
            ];
        });
    }
}
