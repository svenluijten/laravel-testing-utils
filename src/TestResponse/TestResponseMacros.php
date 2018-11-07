<?php

namespace Sven\LaravelTestingUtils\TestResponse;

use Illuminate\Foundation\Testing\TestResponse;

class TestResponseMacros
{
    public static function enable(): void
    {
        TestResponse::mixin(new TestResponseMixin());
    }
}
