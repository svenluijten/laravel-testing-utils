<?php

namespace Sven\LaravelTestingUtils\Constraints;

use InvalidArgumentException;
use PHPUnit\Framework\Constraint\Constraint;

class ViewExists extends Constraint
{
    protected function matches($other): bool
    {
        /** @var \Illuminate\View\ViewFinderInterface $finder */
        $finder = app('view.finder');

        try {
            $finder->find($other);

            return true;
        } catch (InvalidArgumentException $e) {
            return false;
        }
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
