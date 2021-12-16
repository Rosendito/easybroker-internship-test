<?php

namespace Tests;

use App\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /** @test */
    public function test_return_true_when_application_is_booted(): void
    {
        $app = new App();

        $this->assertTrue($app->boot());
    }
}