<?php
declare(strict_types=1);

class Expense
{
    private float $amount = 0.00;

    /** @var Category */
    private ?Category $category = null;

    private string $date;

    public function __construct(float $amount, Category $category, string $date)
    {
        $this->setAmount($amount);
        $this->setCategory($category);
        $this->setDate($date);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        if ($amount < 0) {
            throw new InvalidArgumentException('Amount must be greater than zero');
        }

        $this->amount = $amount;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        if (is_null($category)) {
            throw new InvalidArgumentException('Category is required');
        }

        $this->category = $category;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * Converts Expense object to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'amount' => $this->getAmount(),
            'category' => [
                'name' => $this->getCategory()->getName(),
                'key' => $this->getCategory()->getKey(),
            ],
            'date' => $this->getDate()
        ];
    }

    /**
     * Converts array to an Expense object
     *
     * @param array $data
     * @return Expense
     */
    public static function fromArray(array $data = array()): Expense
    {
        return new Expense(
            $data['amount'],
            new Category($data['category']['name'], $data['category']['key']),
            $data['date']
        );
    }
}