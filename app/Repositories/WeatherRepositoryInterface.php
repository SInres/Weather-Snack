<?php namespace App\Repositories;

/**
 * Interface WeatherRepositoryInterface
 * @package App\Repositories
 */
interface WeatherRepositoryInterface
{

    public function getCurrentWeather();

    public function getForecastWeather();
}