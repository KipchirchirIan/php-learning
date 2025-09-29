<?php
require_once '../src/Calculator.php';
require_once '../src/Operation.php';

$op1 = new Operation(10, 5, '*');

echo 'Result: ' . (new Calculator())->calculate($op1);

echo "<br /><br />";

$op2 = new Operation(10.5, 5.2, '*');

echo 'Result: ' . (new Calculator())->calculate($op2);

echo "<br /><br />";

$op3 = new Operation(10, 5, '%');

echo 'Result: ' . (new Calculator())->calculate($op3);