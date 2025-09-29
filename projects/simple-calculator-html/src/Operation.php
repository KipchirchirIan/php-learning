<?php

declare(strict_types=1);

class Operation
{
    private string $operator;
    private float|int $firstOperand;
    private float|int $secondOperand;

    public function __construct(float|int $firstOperand, float|int $secondOperand, string $operator)
    {
        $this->setOperator($operator);
        $this->setFirstOperand($firstOperand);
        $this->setSecondOperand($secondOperand);
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setOperator(string $operator)
    {
        if (empty($operator)) {
            throw new InvalidArgumentException('Operator is required');
        }

        $this->operator = $operator;
    }

    public function getFirstOperand(): float|int
    {
        return $this->firstOperand;
    }

    public function setFirstOperand(float|int $firstOperand): void
    {
        if (empty($firstOperand)) {
            throw new InvalidArgumentException('First operand is required');
        }

        if (!is_int($firstOperand) && !is_float($firstOperand)) {
            throw new InvalidArgumentException('Invalid first operand');
        }

        $this->firstOperand = $firstOperand;
    }

    public function getSecondOperand(): float|int
    {
        return $this->secondOperand;
    }

    public function setSecondOperand(float|int $secondOperand): void
    {
        if (empty($secondOperand)) {
            throw new InvalidArgumentException('Second operand is required');
        }

        if (!is_int($secondOperand) && !is_float($secondOperand)) {
            throw new InvalidArgumentException('Invalid second operand');
        }

        $this->secondOperand = $secondOperand;
    }
}
