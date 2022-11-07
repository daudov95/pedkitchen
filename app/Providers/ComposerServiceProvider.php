<?php

namespace App\Providers;

use App\View\Composers\AdminNotificationsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        //
        View::composer(['admin.parts.header', 'admin.parts.sidebar'], AdminNotificationsComposer::class);
        // view()->composer(['admin.parts.header', 'admin.parts.sidebar'], AdminNotificationsComposer::class);
    }
}