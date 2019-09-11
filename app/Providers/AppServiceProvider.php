<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Auth;
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
        
        $credentials=[
            'email'=>'rgoodwin@example.org',
            'password'=>'secret',
        ];
        Auth::attempt($credentials);
        Schema::defaultStringLength(191);
    }
}
