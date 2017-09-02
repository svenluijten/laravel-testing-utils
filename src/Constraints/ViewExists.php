<?php

namespace Sven\PackageTestingUtils\Constraints;

use Illuminate\Contracts\View\Factory;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Class ViewExists
 */
class ViewExists extends Constraint
{
    /**
     * {@inheritdoc}
     */
    public function matches($other)
    {
        /** @var \Illuminate\View\Factory $viewFactory */
        $viewFactory = app(Factory::class);

        return $viewFactory->exists($other);
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'does exist';
    }
}
