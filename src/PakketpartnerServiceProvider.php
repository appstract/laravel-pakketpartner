<?php

namespace Appstract\LaravelPakketpartner;

use Appstract\Pakketpartner\Connection;
use Appstract\Pakketpartner\Pakketpartner;
use Illuminate\Support\ServiceProvider;

class PakketpartnerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/pakketpartner.php' => config_path('pakketpartner.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pakketpartner.php', 'pakketpartner');

        $this->app->bind('pakketpartner', function ($app) {
            $connection = new Connection();

            $connection->setApiToken(config('pakketpartner.api_token'));

            $pakketpartner = new Pakketpartner($connection);

            return $pakketpartner;
        });
    }

    /**
     * [provides description].
     * @return [type] [description]
     */
    public function provides()
    {
        return ['pakketpartner'];
    }
}
