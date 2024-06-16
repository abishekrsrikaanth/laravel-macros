<?php

namespace WDR\Macros\Commands;

use Illuminate\Console\Command;

class MacrosCommand extends Command
{
    public $signature = 'laravel-macros';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
