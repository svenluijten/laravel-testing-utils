<?php

namespace Sven\LaravelTestingUtils\Tests\Responses;

use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Http\Response;
use Sven\LaravelTestingUtils\Responses\TestResponseMacros;
use Sven\LaravelTestingUtils\Tests\TestCase;

class GetDataTest extends TestCase
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
            'foo' => 'bar',
            'object' => $object,
        ]);

        $this->assertEquals('bar', $response->getData('foo'));
        $this->assertEquals(20, $response->getData('object')->id);
    }

    private function makeMockResponse($content)
    {
        $baseResponse = tap(new Response, function (Response $response) use ($content) {
            $response->setContent(
                view()->file(__DIR__ . '/sample_view.php', $content)
            );
        });

        return TestResponse::fromBaseResponse($baseResponse);
    }
}
