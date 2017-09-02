<?php

namespace Sven\PackageTestingUtils;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Sven\PackageTestingUtils\Constraints\ViewExists;
use Sven\PackageTestingUtils\Constraints\ViewNotExists;

class BaseTestCase extends AbstractPackageTestCase
{
    /**
     * @param string $name
     * @param string $message
     */
    public static function assertViewExists($name, $message = '')
    {
        self::assertThat($name, new ViewExists(), $message);
    }

    /**
     * @param string $name
     * @param string $message
     */
    public static function assertViewNotExists($name, $message = '')
    {
        self::assertThat($name, new ViewNotExists(), $message);
    }
}
