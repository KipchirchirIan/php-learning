<?php
require_once '../src/Calculator.php';
require_once '../src/Operation.php';

$op1 = new Operation(10, 5, '*');

echo $op1->getFirstOperand() . " " . $op1->getOperator() . " " . $op1->getSecondOperand() . " = " . (new Calculator())->calculate($op1) . "\n";

$op2 = new Operation(10.5, 5.2, '*');

echo $op2->getFirstOperand() . " " . $op2->getOperator() . " " . $op2->getSecondOperand() . " = " . (new Calculator())->calculate($op2) . "\n";

$op3 = new Operation(10, 5, '%');

echo $op3->getFirstOperand() . " " . $op3->getOperator() . " " . $op3->getSecondOperand() . " = " . (new Calculator())->calculate($op3) . "\n";

$op4 = new Operation(20, 4, '/');

echo $op4->getFirstOperand() . " " . $op4->getOperator() . " " . $op4->getSecondOperand() . " = " . (new Calculator())->calculate($op4) . "\n";