<?php

namespace Sven\LaravelTestingUtils\Collections;

use Illuminate\Support\Collection;

class TestCollectionMacros
{
    public static function enable(): void
    {
        Collection::mixin(new TestCollectionMixin());
    }
}
