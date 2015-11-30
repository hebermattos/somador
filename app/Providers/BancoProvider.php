<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Src;

class BancoProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {	
		if ($this->app->environment('teste')){
			$this->app->bind('App\Src\IBanco', 'App\Src\BancoFake');
		}
		else {
			$this->app->bind('App\Src\IBanco', 'App\Src\Banco');
		}	
    }
}
