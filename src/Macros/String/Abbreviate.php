<?php

namespace WDR\Macros\Macros\String;

use Illuminate\Support\Str;

class Abbreviate
{
    /**
     * Abbreviates a given string using the delimiter and glue.
     *
     * @param  string  $subject
     * @param  string  $delimiter
     * @param  string  $glue
     *
     * @mixin Str
     *
     * @return string
     */
    public function __invoke()
    {
        return function ($subject, $delimiter = ' ', $glue = ''): string {
            $subject = (string) $subject;

            $subject = Str::upper($subject);

            $parts = explode($delimiter, $subject);

            $parts = array_map(fn ($word) => Str::substr($word, 0, 1), $parts);

            return implode($glue, $parts);
        };
    }
}
