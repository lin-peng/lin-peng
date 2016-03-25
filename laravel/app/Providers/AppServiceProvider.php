<?php

namespace App\Providers;
use DB;
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
        //
        $nav_arr = DB::table("nav")->where("nav_status","1")->orderby("nav_id","asc")->get();
        // print_r($nav_arr);die;
        // return $nav_arr;
        view()->share('navall', $nav_arr);
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
