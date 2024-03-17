<?php

namespace Ajellender\LaravelNestedSet;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ajellender\LaravelNestedSet\Commands\LaravelNestedSetCommand;

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
