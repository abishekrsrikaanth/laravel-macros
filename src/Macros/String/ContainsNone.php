<?php

namespace WDR\Macros\Macros\String;

class ContainsNone
{
    public function __invoke()
    {
        return function ($haystack, $needles, $ignoreCase = false) {
            foreach ($needles as $needle) {
                if (static::contains($haystack, $needle, $ignoreCase)) {
                    return false;
                }
            }

            return true;
        };
    }
}
