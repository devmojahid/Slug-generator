<?php

namespace Mojahid\SlugGenerator;

use Mojahid\SlugGenerator\Commands\SlugGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SlugGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('slug-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_slug-generator_table')
            ->hasCommand(SlugGeneratorCommand::class);
    }
}
