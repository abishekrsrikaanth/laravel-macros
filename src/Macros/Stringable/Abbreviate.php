<?php

namespace WDR\Macros\Macros\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class Abbreviate
{
    public function __invoke()
    {
        return function ($delimiter = ' ', $glue = '') {
            return new Stringable(Str::abbreviate($this->value, $delimiter, $glue));
        };
    }
}
