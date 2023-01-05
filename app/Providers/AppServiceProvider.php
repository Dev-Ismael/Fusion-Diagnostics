<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer(
            '*', 'App\Http\ViewComposers\SettingComposer'   // Use SettingComposer
        );
        View::composer(
            '*', 'App\Http\ViewComposers\ServiceComposer'   // Use ServiceComposer
        );
        View::composer(
            '*', 'App\Http\ViewComposers\TestComposer'   // Use TestComposer
        );
    }
}
