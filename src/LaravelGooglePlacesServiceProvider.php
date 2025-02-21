<?php

namespace Saglam\LaravelGooglePlaces;

use Saglam\LaravelGooglePlaces\Commands\LaravelGooglePlacesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews()
            ->hasMigration('create_laravel_google_places_table')
            ->hasCommand(LaravelGooglePlacesCommand::class);
    }
}
