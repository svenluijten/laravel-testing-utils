<?php

namespace Sven\LaravelTestingUtils\Tests\Collections;

use PHPUnit\Framework\AssertionFailedError;
use Sven\LaravelTestingUtils\Collections\TestCollectionMacros;
use Sven\LaravelTestingUtils\Tests\TestCase;

class CollectionContainsTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        TestCollectionMacros::enable();
    }

    /** @test */
    public function collection_contains_the_item(): void
    {
        collect(['cap', 'thor'])->assertContains('cap');
    }

    /** @test */
    public function collection_contains_the_item_with_callable(): void
    {
        collect(['cap', 'thor'])->assertContains(function ($value) {
            return $value === 'thor';
        });
    }

    /** @test */
    public function collection_contains_the_item_with_key_value_pair(): void
    {
        collect([['name' => 'cap'], ['name' => 'thor']])->assertContains('name', 'cap');
    }

    /** @test */
    public function collection_does_not_contain_the_item(): void
    {
        $this->expectException(AssertionFailedError::class);

        collect(['cap', 'thor'])->assertContains('hulk');
    }

    /** @test */
    public function collection_does_not_contain_the_item_with_callable(): void
    {
        $this->expectException(AssertionFailedError::class);

        collect(['cap', 'thor'])->assertContains(function ($value) {
            return $value === 'hulk';
        });
    }

    /** @test */
    public function collection_does_not_contain_the_item_with_key_value_pair(): void
    {
        $this->expectException(AssertionFailedError::class);

        collect([['name' => 'cap'], ['name' => 'thor']])->assertContains('name', 'hulk');
    }
}
