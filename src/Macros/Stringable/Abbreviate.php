<?php

namespace WDR\Macros\Macros\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class Abbreviate
{
    /**
     * Abbreviates a given string using the delimiter and glue.
     *
     * @param  string  $delimiter
     * @param  string  $glue
     *
     * @mixin Stringable
     *
     * @return self
     */
    public function __invoke()
    {
        return function ($delimiter = ' ', $glue = '') {
            return new Stringable(Str::abbreviate($this->value, $delimiter, $glue));
        };
    }
}
