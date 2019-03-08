<?php

namespace Sven\LaravelTestingUtils\Tests\Responses;

use PHPUnit\Framework\AssertionFailedError;
use Sven\LaravelTestingUtils\Responses\TestResponseMacros;
use Sven\LaravelTestingUtils\Tests\TestCase;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Http\Response;

class ViewHasDeepTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        TestResponseMacros::enable();
    }

    /** @test */
    public function response_view_has_data(): void
    {
        $string = 'string';
        $integer = 123;
        $object = (object) ['key' => 'value'];
        $collection = collect();
        $model = new SampleModel();

        $response = $this->makeMockResponse([
            'foo' => [
                [
                    'string' => $string,
                    'integer' => $integer,
                ],
                [
                    'object' => $object,
                    'model' => $model,
                ],
                'collection' => $collection,
                'any' => false,
            ],
        ]);

        $response
            ->assertViewHasDeep('foo.0.string', $string)
            ->assertViewHasDeep('foo.0.integer', $integer)
            ->assertViewHasDeep('foo.1.object', $object)
            ->assertViewHasDeep('foo.1.model', $model)
            ->assertViewHasDeep('foo.collection', $collection)
            ->assertViewHasDeep('foo.any');
    }

    /** @test */
    public function response_view_does_not_have_these_datas(): void
    {
        $this->expectException(AssertionFailedError::class);

        $response = $this->makeMockResponse([
            'foo' => [
                'bar' => 'string',
            ],
        ]);

        $response
            ->assertViewHasDeep('foo.bar', 'not string')
            ->assertViewHasDeep('foo.baz', 'string')
            ->assertViewHasDeep('foo.0')
            ->assertViewHasDeep('foo.baz');
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
