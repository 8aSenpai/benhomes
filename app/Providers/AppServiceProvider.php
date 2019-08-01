<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
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
        //every time the my_menu view is rendered, this callback will be called
        View::composer('layouts/app', function( $view )
        { 
            $data   = DB::table('modificable')->get(); 
            //pass the data to the view
            $view->with( 'data', $data );
        } );
    }
}
