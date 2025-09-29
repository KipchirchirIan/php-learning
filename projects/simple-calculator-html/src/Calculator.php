<?php

declare(strict_types=1);

class Calculator
{
    public function calculate(Operation $op)
    {
        try {
            $result = match ($op->getOperator()) {
            '+' => $op->getFirstOperand() + $op->getSecondOperand(),
            '-' => $op->getFirstOperand() - $op->getSecondOperand(),
            '*' => $op->getFirstOperand() * $op->getSecondOperand(),
            '/' => $op->getFirstOperand() / $op->getSecondOperand(),
            default => throw new \Exception('Invalid operand'),
        };

        return $result;
        } catch (\Exception $e) {
            echo $e->getMessage() . ". Allowed operands are +, -, / and *";
        }
    }
}
