<?php

namespace Sven\LaravelTestingUtils\TestResponse;

class TestResponseMixin
{
    /**
     * Get data from the view in a response.
     *
     * @return \Closure
     */
    public function getData(): callable
    {
        return function ($key) {
            /* @var \Illuminate\Foundation\Testing\TestResponse $this */
            return $this->original->getData()[$key];
        };
    }
}
