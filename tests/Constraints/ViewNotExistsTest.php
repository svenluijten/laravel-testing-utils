<?php

namespace Sven\LaravelTestingUtils\Tests\Constraints;

use Sven\LaravelTestingUtils\Constraints\ViewNotExists;
use Sven\LaravelTestingUtils\Tests\TestCase;

class ViewNotExistsTest extends TestCase
{
    /** @test */
    public function a_view_exists()
    {
        $this->assertTrue((new ViewNotExists)->matches('something-else'));
    }

    /** @test */
    public function a_view_does_not_exist()
    {
        $this->assertFalse((new ViewNotExists)->matches('welcome'));
    }
}
