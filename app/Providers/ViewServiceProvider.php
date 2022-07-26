<?php

namespace App\Providers;

use App\Models\admin;
use App\Models\cat;
use App\Models\settings;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
       view()->composer('Front._header',function($view){
        $view->with('cats',cat::all());
        $view->with('set',settings::select('logo','favicon')->first());
        
       });

       view()->composer('Admin.inc._header',function($view){
        $view->with('cats',cat::all());
        $view->with('set',settings::select('logo','favicon')->first());
        
       });

       view()->composer('Front._footer',function($view){
        $view->with('set',settings::first());
        
       });
       view()->composer('Admin.inc.main-header',function($view){

       $view->with('admin',admin::select('username','email')->first());
    });





    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
