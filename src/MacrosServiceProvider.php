<?php

namespace WDR\Macros;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WDR\Macros\Macros\Stringable\Abbreviate;

class MacrosServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-macros');

    }

    public function registeringPackage()
    {
        Collection::make($this->getStringMacros())
            ->reject(fn ($class, $macro) => Str::hasMacro($macro))
            ->each(fn ($class, $macro) => Str::macro($macro, app($class)()));

        Collection::make($this->getStringableMacros())
            ->reject(fn ($class, $macro) => Stringable::hasMacro($macro))
            ->each(fn ($class, $macro) => Stringable::macro($macro, app($class)()));
    }

    public function getStringMacros(): array
    {
        return [
            'abbreviate' => Macros\String\Abbreviate::class,
        ];
    }

    public function getStringableMacros(): array
    {
        return [
            'abbreviate' => Abbreviate::class,
        ];
    }
}
