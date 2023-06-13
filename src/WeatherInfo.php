<?php

namespace PrasunPackages\WeatherInfo;

use Illuminate\Support\Facades\Http;

class WeatherInfo {

    public function index($city = '')
    {
        return Http::withHeaders([
                    'X-Api-Key' => 'IzUa0JGhLYFuKRMTQuv8/g==CnJpKULQMuKSy0ZG'
                ])->get('https://api.api-ninjas.com/v1/weather', [
                    'city' => $city
        ]);
    }

}
