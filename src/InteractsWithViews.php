<?php

namespace Sven\LaravelTestingUtils;

use Sven\LaravelTestingUtils\Constraints\ViewExists;
use Sven\LaravelTestingUtils\Constraints\ViewNotExists;

/**
 * @mixin \Illuminate\Foundation\Testing\TestCase
 */
trait InteractsWithViews
{
    public static function assertViewExists(string $name, string $message = ''): void
    {
        self::assertThat($name, new ViewExists, $message);
    }

    public static function assertViewNotExists(string $name, string $message = ''): void
    {
        self::assertThat($name, new ViewNotExists, $message);
    }
}
