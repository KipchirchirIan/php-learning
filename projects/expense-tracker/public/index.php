<?php

require_once '../src/Expense.php';
require_once '../src/Category.php';
require_once '../src/ExpenseBook.php';

$expenseBook = new ExpenseBook();
$expenseBook->clear();
$expenseBook->load('../data/expenses.json'); // Load existing expenses

// Add new expenses
$exp1 = new Expense(100.00, new Category('food', 'f1'), '09/01/2025');
$expenseBook->add($exp1);

$exp2 = new Expense(150.00, new Category('food', 'f1'), '09/02/2025');
$expenseBook->add($exp2);

$exp3 = new Expense(35.00, new Category('clothing', 'c1'), '09/03/2025');
$expenseBook->add($exp3);

$exp4 = new Expense(75.00, new Category('Misc', 'm1'), '09/03/2025');
$expenseBook->add($exp4);

$expenseBook->save('../data/expenses.json'); // Save expenses to persistent storage

if (php_sapi_name() === 'cli') { // Check client interaction with app - web or cli
    $expenseBook->listExpenses();
} else {
    $totalSpentPerCats = $expenseBook->getTotalSpentPerCategory();
    $expenses = $expenseBook->getAll();

    include_once '../views/list.php';
}
