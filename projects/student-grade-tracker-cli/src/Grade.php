<?php
declare(strict_types=1);

class Grade
{
    private float $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function setValue($value): void
    {
        if ($value < 0 || $value > 100) {
            throw new InvalidArgumentException('Grade must be between 0 and 100');
        }

        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}