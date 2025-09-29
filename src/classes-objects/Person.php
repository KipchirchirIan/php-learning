<?php

declare(strict_types=1);

class Person
{
    private string $name;
    private int $age;
    private float $height;
    private ?string $email;
    private bool $active = true;

    public function __construct(
        string $name,
        int $age,
        float $height,
        ?string $email
    ) {
        $this->setName($name);
        $this->setAge($age);
        $this->setHeight($height);
        $this->setEmail($email);
    }

    public function setName(string $name): void
    {
        if (empty(trim($name))) {
            throw new InvalidArgumentException("Name cannot be empty.");
        }

        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age): void
    {
        if ($age < 0) {
            throw new InvalidArgumentException("Age cannot be a negative.");
        }

        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setHeight(float $height): void
    {
        if ($height < 0) {
            throw new InvalidArgumentException("Height cannot be negative.");
        }

        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setEmail(string $email): void
    {
        if ($email !== null && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Invalid email format.");
        }

        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Deactivate the user's account
     *
     * @return void
     */
    public function deactivate(): void
    {
        $this->active = false;
    }
}
