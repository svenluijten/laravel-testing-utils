<?php

namespace Sven\LaravelTestingUtils\Constraints;

use PHPUnit\Framework\Constraint\Constraint;

class ViewNotEquals extends Constraint
{
    /**
     * @var string
     */
    protected $expected;

    public function __construct(string $expected)
    {
        parent::__construct();

        $this->expected = $expected;
    }

    protected function matches($other): bool
    {
        /** @var \Illuminate\View\ViewFinderInterface $finder */
        $finder = app('view.finder');

        $contents = file_get_contents($finder->find($other));

        if ($contents === false) {
            return false;
        }

        return $this->expected !== $contents;
    }

    protected function failureDescription($other): string
    {
        return 'the content of the view '.parent::failureDescription($other);
    }

    public function toString(): string
    {
        return 'does not equal the specified value';
    }
}
