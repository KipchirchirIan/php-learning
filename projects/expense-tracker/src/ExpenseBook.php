<?php

declare(strict_types=1);

class ExpenseBook
{
    /** @var Expense[] */
    private array $expenses = [];

    /**
     * Add new expense
     *
     * @param Expense $expense
     * @return void
     */
    public function add(Expense $expense): void
    {
        $this->expenses[] = $expense;
    }

    /**
     * Save expenses to persistent storage
     *
     * @param string $filePath Path to storage
     * @return void
     */
    public function save(string $filePath): void
    {
        $data = array_map(fn($e) => $e->toArray(), $this->expenses);
        file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT), LOCK_EX);
    }

    /**
     * Load expenses from persistent storage
     *
     * @param string $filePath Path to file
     * @return void
     */
    public function load(string $filePath): void
    {
        if (!file_exists($filePath)) return;
        $data = json_decode(file_get_contents($filePath), true);

        if(!$data) return;

        foreach ($data as $item) {
            $this->expenses[] = Expense::fromArray($item);
        }
    }

    public function getTotalSpentPerCategory(): array
    {
        $totalPerCatArr = array();

        foreach ($this->expenses as $expense) {
            $key = $expense->getCategory()->getKey();

            if (!isset($totalPerCatArr[$key])) {
                $totalPerCatArr[$key] = [
                    'category_name' => $expense->getCategory()->getName(),
                    'total' => 0.0
                ];
            }

            $totalPerCatArr[$key]['total'] += $expense->getAmount();
        }

        return $totalPerCatArr;
    }

    public function listExpenses()
    {
        $categories = $this->getTotalSpentPerCategory();

        // Define the column widths
        

        echo "Category\tTotal Amount\n";
        foreach ($categories as $category) {
            echo ucwords($category['category_name']) . "\t$" . number_format($category['total'], 2) . "\n";
        }
    }

    public function getAll(): array
    {
        return $this->expenses;
    }

    public function clear(): void
    {
        $this->expenses = [];
    }
}
