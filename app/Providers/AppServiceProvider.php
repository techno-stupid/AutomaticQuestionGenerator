<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.home.homeContent',function($view){
            $publishedDepartments = DB::table('departments')
                    ->where('publicationStatus',1)
                    ->count();
            $view->with('publishedDepartments',$publishedDepartments);
            $publishedSubjects = DB::table('subjects')
                    ->where('publicationStatus',1)
                    ->count();

            $view->with('publishedSubjects',$publishedSubjects);
            $publishedBQ = DB::table('broad_questions')
                    ->where('publicationStatus',1)
                    ->count();
            $view->with('publishedBQ',$publishedBQ);
        });
        view::composer('*',function($view){
            $publichedTags = DB::table('tags')
                ->get();
            $view->with('publichedTags',$publichedTags);
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
