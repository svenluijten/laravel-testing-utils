<?php

namespace Sven\PackageTestingUtils\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Set up the testing suite.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Tear down the testing suite.
     */
    public function tearDown()
    {
        //
    }
}
