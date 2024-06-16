<?php

namespace WDR\Macros;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
    }

    public function getStringMacros(): array
    {
        return [
            'abbreviate' => \WDR\Macros\Macros\String\Abbreviate::class,
        ];
    }

    public function getStringableMacros(): array
    {
        return [
            'abbreviate' => \WDR\Macros\Macros\Stringable\Abbreviate::class,
        ];
    }
}
