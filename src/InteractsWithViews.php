<?php

namespace Sven\LaravelTestingUtils;

use Sven\LaravelTestingUtils\Constraints\ViewExists;
use Sven\LaravelTestingUtils\Constraints\ViewNotExists;

/**
 * @mixin \PHPUnit\Framework\TestCase
 */
trait InteractsWithViews
{
    public function assertViewExists(string $name, string $message = ''): void
    {
        self::assertThat($name, new ViewExists, $message);
    }

    public function assertViewNotExists(string $name, string $message = ''): void
    {
        self::assertThat($name, new ViewNotExists, $message);
    }
}
