<?php

namespace Sven\LaravelTestingUtils\Tests\Collections;

use PHPUnit\Framework\AssertionFailedError;
use Sven\LaravelTestingUtils\Collections\TestCollectionMacros;
use Sven\LaravelTestingUtils\Tests\TestCase;

class CollectionNotContainsTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        TestCollectionMacros::enable();
    }

    /** @test */
    public function collection_contains_the_item()
    {
        $this->expectException(AssertionFailedError::class);
        collect(['cap', 'thor'])->assertNotContains('cap');
    }

    /** @test */
    public function collection_does_not_contain_the_item()
    {
        collect(['cap', 'thor'])->assertNotContains('hulk');
    }
}
