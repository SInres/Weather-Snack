<?php namespace App\Repositories;

use \Cache;
use Carbon\Carbon;

/**
 * Class WeatherEloquentRepository
 * @package App\Repositories
 */

 class WeatherEloquentRepository implements WeatherRepositoryInterface 
 {
    private $city_id = '756135';
    private $api_key = '812727ab3bf09d7280a54d8779091df5';
    private $units = 'metric';
    // private $lang = 'en';
    
    public function getCurrentWeather()
    {
        return Cache::remember('current_weather', $minutes='60', function()
        {
            $last_synch = Carbon::now()->format('js \\of F Y h:i A');
            $jsonfile = file_get_contents("https://api.openweathermap.org/data/2.5/weather?id=" . $this->city_id . "&appid=" . $this->api_key . "&units=" . $this->units . "");
            $jsondata_current = json_decode($jsonfile);

            return $jsondata_current;
            return $last_synch;
        });  
    }

    public function getForecastWeather()
    {
        return Cache::remember('forecast_weather', $minutes='60', function()
        {
            $jsonfile = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?id=" . $this->city_id . "&cnt=14&appid=" . $this->api_key . "&units=" . $this->units . "");
            $jsondata_forecast = json_decode($jsonfile);

            return $jsondata_forecast;
        });
    }
 }