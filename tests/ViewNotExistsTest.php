<?php

namespace Sven\PackageTestingUtils\Tests;

use Sven\PackageTestingUtils\Constraints\ViewNotExists;

class ViewNotExistsTest extends TestCase
{
    /**
     * @var \Sven\PackageTestingUtils\Constraints\ViewExists
     */
    protected $constraint;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->constraint = new ViewNotExists();

        parent::setUp();
    }

    /** @test */
    public function a_view_exists()
    {
        $this->assertTrue($this->constraint->matches('something-else'));
    }

    /** @test */
    public function a_view_does_not_exist()
    {
        $this->assertFalse($this->constraint->matches('welcome'));
    }
}
