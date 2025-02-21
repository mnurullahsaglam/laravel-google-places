<?php

namespace Saglam\LaravelGooglePlaces\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saglam\LaravelGooglePlaces\LaravelGooglePlaces
 */
class LaravelGooglePlaces extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Saglam\LaravelGooglePlaces\LaravelGooglePlaces::class;
    }
}
