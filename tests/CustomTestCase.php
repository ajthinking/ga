<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use PHPFile;
use LaravelFile;
use Illuminate\Contracts\Console\Kernel;
use ErrorException;
use Illuminate\Support\Str;

abstract class CustomTestCase extends BaseTestCase
{
    protected function setUp() : void
    {
        exit("I will kill the app here!");
        parent::setUp();
    }

    protected function tearDown() : void
    {
        parent::tearDown();
    }    

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../../../../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
