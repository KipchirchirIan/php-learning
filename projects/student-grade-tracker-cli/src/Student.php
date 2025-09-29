<?php

declare(strict_types=1);

class Student
{
    public string $name;

    /** @var Grade[] */
    private array $grades = [];

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function addGrade(Grade $grade): void
    {
        $this->grades[] = $grade->getValue();
    }

    public function getAverageGrade(): float
    {
        return count($this->grades) ? array_sum($this->grades) / count($this->grades) : 0;
    }

    public function assignLetterGrade(): string
    {
        $avg = $this->getAverageGrade();

        return match (true) {
            $avg >= 90 => 'A',
            $avg >= 80 => 'B',
            $avg >= 70 => 'C',
            $avg >= 60 => 'D',
            default => 'F',
        };
    }
}
