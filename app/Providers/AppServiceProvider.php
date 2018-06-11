<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Friend;
use Auth;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('friends', function ($view) {



            $friends = Friend::where('friend1', Auth::id())->join('users', 'friend2', '=', 'users.id')->get();

            $view->friends = $friends;


        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
