<?php

namespace WDR\Macros\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use WDR\Macros\MacrosServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

    }

    protected function getPackageProviders($app)
    {
        return [
            MacrosServiceProvider::class,
        ];
    }
}
