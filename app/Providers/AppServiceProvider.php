<?php

namespace App\Providers;

use App\Tag;
use App\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(['posts.create'], function ($view) {
            $categories = Cache::rememberForever('categories', function () {
                return Category::orderBy('name', 'ASC')->get();
            });

            $tags = Cache::rememberForever('tags', function () {
                return Tag::orderBy('name', 'ASC')->get();
            });


            $view->with('categories', $categories)->with('tags', $tags);
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
