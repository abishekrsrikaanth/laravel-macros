<?php

namespace WDR\Macros\Macros\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class ContainsNone
{
    /**
     * Abbreviates a given string using the delimiter and glue.
     *
     * @param  string  $needles
     * @param  string  $ignoreCase
     *
     * @mixin Stringable
     *
     * @return bool
     */
    public function __invoke()
    {
        return function ($needles, $ignoreCase = false) {
            return Str::containsNone($this->value, $needles, $ignoreCase);
        };
    }
}
