<?php

namespace Saglam\LaravelGooglePlaces;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Saglam\LaravelGooglePlaces\Commands\LaravelGooglePlacesCommand;

class LaravelGooglePlacesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-google-places')
            ->hasConfigFile()
            ->hasCommand(LaravelGooglePlacesCommand::class);
    }
}
