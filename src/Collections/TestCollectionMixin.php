<?php

namespace Sven\LaravelTestingUtils\Collections;

use PHPUnit\Framework\Assert as PHPUnit;

/**
 * @method bool contains($key, $operator = null, $value = null)
 */
class TestCollectionMixin
{
    /**
     * Assert that an item exists in the collection.
     *
     * @return \Closure
     */
    public function assertContains()
    {
        return function ($item) {
            /** @var \Illuminate\Support\Collection $this*/
            PHPUnit::assertTrue(
                $this->contains($item),
                "Failed asserting that the collection contains the specified value."
            );
        };
    }

    /**
     * Assert that an item does not exist in the collection.
     *
     * @return \Closure
     */
    public function assertNotContains()
    {
        return function ($item) {
            /** @var \Illuminate\Support\Collection $this*/
            PHPUnit::assertFalse(
                $this->contains($item),
                "Failed asserting that the collection does not contain the specified value."
            );
        };
    }
}
