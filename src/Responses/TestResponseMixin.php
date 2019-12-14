<?php

namespace Sven\LaravelTestingUtils\Responses;

use PHPUnit\Framework\Assert as PHPUnit;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Closure;

class TestResponseMixin
{
    /**
     * Assert that a key exists in the response view's data.
     *
     * @return \Closure
     */
    public function assertViewHasDeep(): callable
    {
        return function ($keyInView, $value = null) {
            /** @var \Illuminate\Foundation\Testing\TestResponse $response */
            $response = $this;

            $response->ensureResponseHasView();

            $data = $response->getOriginalContent()->getData();
            $keys = explode('.', $keyInView);

            foreach ($keys as $key) {
                if (Arr::accessible($data)) {
                    PHPUnit::assertTrue(Arr::exists($data, $key));
                } elseif (is_object($data)) {
                    PHPUnit::assertTrue(isset($data->{$key}));
                } else {
                    PHPUnit::fail('Data is not an object or array.');
                }

                $data = data_get($data, $key);
            }

            if ($value instanceof Closure) {
                PHPUnit::assertTrue($value($data));
            } elseif ($value instanceof Model) {
                PHPUnit::assertTrue($value->is($data));
            } else {
                PHPUnit::assertEquals($value, $data);
            }

            return $response;
        };
    }
}
