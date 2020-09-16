<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConfigController;

class ViewShareProvider extends ServiceProvider
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

        view()->composer('*', function($view)
        {
            if(Auth::check()){
                $view->with(['config' => ConfigController::getConfig(), 'user' => auth()->user()]);
            } else {
                
                $view->with(['config' => ConfigController::getConfig()]);
            }
        });
    }
}
