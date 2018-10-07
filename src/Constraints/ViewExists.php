<?php

namespace Sven\LaravelTestingUtils\Constraints;

use Illuminate\Contracts\View\Factory;
use PHPUnit\Framework\Constraint\Constraint;

class ViewExists extends Constraint
{
    public function matches($other): bool
    {
        /** @var \Illuminate\View\Factory $viewFactory */
        $viewFactory = app(Factory::class);

        return $viewFactory->exists($other);
    }

    protected function failureDescription($other): string
    {
        return 'a view with the name '.parent::failureDescription($other);
    }

    public function toString(): string
    {
        return 'exists';
    }
}
