<?php

declare(strict_types=1);

class Rating
{
    private $value;

    public function __construct(float $value) {
        if ($value < 0 || $value > 5) {
            throw new \InvalidArgumentException('A rating should always be a number between 0 and 5!');
        }

        $this->value = $value;
    }

    public function getValue() : float {
        return $this->value;
    }
}