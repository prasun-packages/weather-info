<?php

namespace PrasunPackages\WeatherInfo;

use Illuminate\Support\Facades\Http;

class WeatherInfo {

    public function index($city = '')
    {
        dump(config('weatherinfo'));
        return Http::withHeaders([
                    'X-Api-Key' => config('weatherinfo.ninjas.apikey')
                ])->get('https://api.api-ninjas.com/v1/weather', [
                    'city' => $city
        ]);
    }

}
