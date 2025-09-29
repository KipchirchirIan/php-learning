<?php
declare(strict_types=1);

class Category
{
    private string $name;
    private string $key;

    public function __construct(string $name, string $key)
    {
        $this->setName($name);
        $this->setKey($key);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }
}