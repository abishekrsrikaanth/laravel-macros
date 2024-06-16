<?php

namespace Illuminate\Support {
    class Str
    {
        public function abbreviate($subject, $delimiter = ' ', $glue = '')
        {
            return '';
        }

        public function containsNone($haystack, $needles, $ignoreCase = false)
        {
            return '';
        }
    }
}

namespace Illuminate\Support {

    class Stringable
    {
        public function abbreviate($delimiter = ' ', $glue = '')
        {
            return $this;
        }

        public function containsNone($needles, $ignoreCase = false)
        {
            return $this;
        }
    }
}
