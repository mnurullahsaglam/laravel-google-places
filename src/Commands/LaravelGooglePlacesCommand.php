<?php

namespace Saglam\LaravelGooglePlaces\Commands;

use Illuminate\Console\Command;

class LaravelGooglePlacesCommand extends Command
{
    public $signature = 'laravel-google-places';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
