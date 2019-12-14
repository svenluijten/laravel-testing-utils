<?php

namespace Sven\LaravelTestingUtils\Tests;

use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var string[]
     */
    private $made = [];

    protected function setUp(): void
    {
        parent::setUp();

        /** @var \Illuminate\Contracts\Config\Repository $config */
        $config = $this->app['config'];

        $config->set('view.paths', [
            $this->path = __DIR__.'/resources/views',
        ]);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        foreach ($this->made as $path) {
            @unlink($path);
        }
    }

    protected function makeView(string $name, string $content = '', string $extension = '.blade.php'): void
    {
        $extension = Str::start($extension, '.');

        $path = $this->path.'/'.$name.$extension;

        $this->made[] = $path;

        file_put_contents($path, $content);
    }
}
