<?php

namespace Sven\LaravelTestingUtils\Tests\Constraints;

use Sven\LaravelTestingUtils\Constraints\ViewExists;
use Sven\LaravelTestingUtils\Tests\TestCase;

class ViewExistsTest extends TestCase
{
    /** @test */
    public function a_view_exists()
    {
        $this->assertTrue((new ViewExists)->matches('welcome'));
    }

    /** @test */
    public function a_view_does_not_exist()
    {
        $this->assertFalse((new ViewExists)->matches('something-else'));
    }
}
