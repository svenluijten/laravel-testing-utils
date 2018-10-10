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
    public function collection_does_not_contain_the_item()
    {
        collect(['cap', 'thor'])->assertNotContains('hulk');
    }

    /** @test */
    public function collection_does_not_contain_the_item_with_callable()
    {
        collect(['cap', 'thor'])->assertNotContains(function ($value) {
            return $value == 'hulk';
        });
    }

    /** @test */
    public function collection_does_not_contain_the_item_with_key_value_pair()
    {
        collect([['name' => 'cap'], ['name' => 'thor']])->assertNotContains('name', 'hulk');
    }

    /** @test */
    public function collection_contains_the_item()
    {
        $this->expectException(AssertionFailedError::class);

        collect(['cap', 'thor'])->assertNotContains('cap');
    }

    /** @test */
    public function collection_contains_the_item_with_callable()
    {
        $this->expectException(AssertionFailedError::class);

        collect(['cap', 'thor'])->assertNotContains(function ($value) {
            return $value == 'thor';
        });
    }

    /** @test */
    public function collection_contains_the_item_with_key_value_pair()
    {
        $this->expectException(AssertionFailedError::class);

        collect([['name' => 'cap'], ['name' => 'thor']])->assertNotContains('name', 'cap');
    }
}
