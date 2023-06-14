<?php

namespace PrasunPackages\WeatherInfo\Providers;

use Illuminate\Support\ServiceProvider;

class WeatherInfoProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'weather-info');
        $this->publishes([
            __DIR__ . '/../config/weatherinfo.php' => config_path('weatherinfo.php'),
        ], 'config');
    }

}
