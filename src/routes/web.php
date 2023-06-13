<?php

use PrasunPackages\WeatherInfo\Controllers\WeatherInfoController;
use Illuminate\Support\Facades\Route;

Route::any('weather-info', WeatherInfoController::class);