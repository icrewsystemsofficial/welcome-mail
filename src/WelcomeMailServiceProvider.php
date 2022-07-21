<?php

namespace Icrewsystems\WelcomeMail;


use Icrewsystems\WelcomeMail\Commands\SendMailCommand;
use Illuminate\Support\ServiceProvider;

class WelcomeMailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'welcomemail');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd("it works.!!");

        if($this->app->runningInConsole()) {
            $this->commands([
                SendMailCommand::class
            ]);
        }


    }
}
