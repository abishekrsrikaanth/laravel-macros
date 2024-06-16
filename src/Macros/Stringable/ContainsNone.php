<?php

namespace WDR\Macros\Macros\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class ContainsNone
{
    public function __invoke()
    {
        return function ($needles, $ignoreCase = false) {
            return new Stringable(Str::containsNone($this->value, $needles, $ignoreCase));
        };
    }
}
