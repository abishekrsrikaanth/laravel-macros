<?php

namespace WDR\Macros\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WDR\Macros\Macros
 */
class Macros extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WDR\Macros\Macros::class;
    }
}
