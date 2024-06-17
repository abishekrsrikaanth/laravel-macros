<?php

namespace WDR\Macros\Macros\String;

use Illuminate\Support\Str;

class ContainsNone
{
    /**
     * Abbreviates a given string using the delimiter and glue.
     *
     * @param  string  $haystack
     * @param  array  $needles
     * @param  bool  $ignoreCase
     *
     * @mixin Str
     *
     * @return bool
     */
    public function __invoke()
    {
        return function (string $haystack, array $needles, bool $ignoreCase = false) {
            foreach ($needles as $needle) {
                if (Str::contains($haystack, $needle, $ignoreCase)) {
                    return false;
                }
            }

            return true;
        };
    }
}
