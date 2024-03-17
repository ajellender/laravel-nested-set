<?php

namespace Ajellender\LaravelNestedSet;

use Ajellender\LaravelNestedSet\Commands\LaravelNestedSetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNestedSetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nested-set')
            ->hasConfigFile()
            ->hasCommand(LaravelNestedSetCommand::class);
    }
}
