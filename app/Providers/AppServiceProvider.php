<?php

namespace App\Providers;

use App\Post;
use App\Category;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('*', function ($view) {
            $view->with('articles',  \App\Post::orderBy('id', 'desc')->limit(5)->get());
            $view->with('categs',  \App\Category::orderBy('id', 'asc')->get());
            
        });
        
    }
}
