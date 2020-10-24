<?php

namespace NiravChavda\Timezone;

use Illuminate\Support\ServiceProvider;

class TimeZoneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        /*
            To distinguish between the default Laravel views and package views, we have to add an extra parameter to our 
            loadviewsfrom() function and that extra parameter should be the name of your package. In our case, it's timezone. 
            So now whenever we want to load a view we reference it with this packagename::view syntax convention.
        */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'timezone');
        
        /* 
         * Copy our views into Laravel folder resources/views
         * And then, to perform actual copying, user should publish our views, with Artisan command:
         * 'php artisan vendor:publish'
        */
        $this->publishes([
            __DIR__ . '/resources/views' => base_path('resources/views/timezone'),
        ]);
    }
}
