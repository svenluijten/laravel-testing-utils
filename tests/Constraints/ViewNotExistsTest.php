<?php

namespace Sven\LaravelTestingUtils\Tests\Constraints;

use Sven\LaravelTestingUtils\Constraints\ViewNotExists;
use Sven\LaravelTestingUtils\Tests\TestCase;

class ViewNotExistsTest extends TestCase
{
    /** @test */
    public function a_view_exists(): void
    {
        $this->assertTrue((new ViewNotExists)->evaluate('does-not-exist', '', true));
    }

    /** @test */
    public function a_view_does_not_exist(): void
    {
        $this->makeView('exists');

        $this->assertFalse((new ViewNotExists)->evaluate('exists', '', true));
    }
}
