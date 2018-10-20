<?php

namespace Sven\LaravelTestingUtils\Tests\Constraints;

use Sven\LaravelTestingUtils\Constraints\ViewEquals;
use Sven\LaravelTestingUtils\Tests\TestCase;

class ViewEqualsTest extends TestCase
{
    /** @test */
    public function the_contents_of_a_view_equal_the_given_value(): void
    {
        $this->makeView('viewname', 'Contents of the view');

        $constraint = new ViewEquals('Contents of the view');

        $this->assertTrue($constraint->evaluate('viewname', '', true));
    }

    /** @test */
    public function the_contents_of_a_view_do_not_equal_the_given_value(): void
    {
        $this->makeView('viewname', 'Contents of the view');

        $constraint = new ViewEquals('Other contents');

        $this->assertFalse($constraint->evaluate('viewname', '', true));
    }
}
