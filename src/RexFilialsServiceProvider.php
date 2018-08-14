<?php

namespace Lucianopalhares\Rexfilials;

use Illuminate\Support\ServiceProvider;

class RexFilialsServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/rexfilials.php' => config_path('rexfilials.php'),
        ], 'rexfilials_config');
        
        
        //grava na pasta
        /*$this->publishes([
            __DIR__.'/controllers' => base_path('app/Http/Controllers/lucianopalhares/rexfilials'),
        ]);*/
        
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        
        $this->loadViewsFrom(__DIR__.'/views', 'rexfilials');

        //grava na pasta
        $this->publishes(
            [__DIR__ . '/views' => base_path('resources/views/lucianopalhares/rexfilials')],
            'views'
        );
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/rexfilials.php',
            'rexfilials'
        );
        
    }
}