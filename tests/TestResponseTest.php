<?php

namespace Sven\LaravelTestingUtils\Tests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use Mockery as m;
use Sven\LaravelTestingUtils\TestResponse\TestResponseMacros;

class TestResponseTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        TestResponseMacros::enable();
    }

    /** @test */
    public function get_data_from_view_response()
    {
        $object = new \stdClass();
        $object->id = 20;

        $response = $this->makeMockResponse([
            'render' => 'hello world',
            'getData' => [
                'foo' => 'bar',
                'object' => $object
            ],
        ]);

        $this->assertEquals('bar', $response->getData('foo'));
        $this->assertEquals(20, $response->getData('object')->id);
    }

    private function makeMockResponse($content)
    {
        $baseResponse = tap(new Response, function (Response $response) use ($content) {
            $response->setContent(m::mock(View::class, $content));
        });
        return TestResponse::fromBaseResponse($baseResponse);
    }
}
