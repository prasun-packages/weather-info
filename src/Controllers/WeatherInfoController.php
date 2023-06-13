<?php

namespace PrasunPackages\WeatherInfo\Controllers;

use Illuminate\Http\Request;
use PrasunPackages\WeatherInfo\WeatherInfo;

class WeatherInfoController {

    public function __invoke(WeatherInfo $weatherInfo, Request $request) {
        $city = $request->has('city') ? $request->input('city') : '';

        $response = [];
        if(!empty($city)){
            $response = $weatherInfo->index($city);
            $response = json_decode($response, true);
            //dump($response);
        }
        
        return view('weather-info::index', $response);
    }

}
