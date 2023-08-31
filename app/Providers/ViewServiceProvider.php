<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       view()->composer('front.inc.header',function($view){
         $view->with('cats',Category::select('id','name_'.app()->getLocale())->get());
         $view->with('contacts',Contact::select('name_'.app()->getLocale(),'logo','favicon')->first());
       });
       view()->composer('front.inc.footer',function($view){
        $view->with('contacts',Contact::first());
      });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
