<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Repositories\WeatherRepositoryInterface;

class WeatherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(WeatherRepositoryInterface $weatherInterface)
    {
        $this->weatherInterface = $weatherInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_date = Carbon::now(); // For display today date in view

        $current_weather = $this->weatherInterface->getCurrentWeather();
        $forecast_weather = $this->weatherInterface->getForecastWeather();

        dd($current_weather);
    }

}
