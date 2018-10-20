<?php

namespace Sven\LaravelTestingUtils\Constraints;

use InvalidArgumentException;
use PHPUnit\Framework\Constraint\Constraint;

class ViewNotExists extends Constraint
{
    protected function matches($other): bool
    {
        /** @var \Illuminate\View\ViewFinderInterface $finder */
        $finder = app('view.finder');

        try {
            $finder->find($other);

            return false;
        } catch (InvalidArgumentException $e) {
            return true;
        }
    }

    protected function failureDescription($other): string
    {
        return 'a view with the name '.parent::failureDescription($other);
    }

    public function toString(): string
    {
        return 'does not exist';
    }
}
