<?php

namespace Sven\LaravelTestingUtils;

use Sven\LaravelTestingUtils\Constraints\ViewEquals;
use Sven\LaravelTestingUtils\Constraints\ViewExists;
use Sven\LaravelTestingUtils\Constraints\ViewNotEquals;
use Sven\LaravelTestingUtils\Constraints\ViewNotExists;
use PHPUnit\Framework\Assert as PHPUnit;

trait InteractsWithViews
{
    public function assertViewExists(string $name, string $message = ''): void
    {
        PHPUnit::assertThat($name, new ViewExists, $message);
    }

    public function assertViewNotExists(string $name, string $message = ''): void
    {
        PHPUnit::assertThat($name, new ViewNotExists, $message);
    }

    public function assertViewEquals(string $expected, string $view, string $message = ''): void
    {
        PHPUnit::assertThat($view, new ViewEquals($expected), $message);
    }

    public function assertViewNotEquals(string $expected, string $view, string $message = ''): void
    {
        PHPUnit::assertThat($view, new ViewNotEquals($expected), $message);
    }
}
