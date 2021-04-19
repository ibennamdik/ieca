<?php

namespace App\Providers;

use App\Post;
use App\Product;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        view()->composer('*', function($view)
        {
            if (Auth::check()) {
                $view->with('totalItemsInCart', \Cart::session(Auth::user()->id));
                $view->with('products', Product::where('visibility', true)->paginate(5));
                $view->with('posts', Post::paginate(5));
                $view->with('settings', Setting::first());
            }else {
                $view->with('totalItemsInCart', null);
                $view->with('settings', Setting::first());
            }
        });

        // if($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }
    }
}
