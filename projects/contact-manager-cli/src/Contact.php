<?php

declare(strict_types=1);

use PSpell\Config;

class Contact
{
    private string $name;
    private string $telephone;
    private string $email;

    public function __construct(string $name, string $telephone, string $email)
    {
        $this->setName($name);
        $this->setTelephone($telephone);
        $this->setEmail($email);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Name is required');
        }

        $this->name = $name;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        if (empty($telephone)) {
            throw new InvalidArgumentException('Telephone is required');
        }

        $this->telephone = $telephone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        // Todo: Check for valid email
        if (empty($email)) {
            throw new InvalidArgumentException('Email is required');
        }

        $this->email = $email;
    }

    /**
     * Converts contact object to an array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'telephone' => $this->getTelephone(),
            'email' => $this->getEmail()
        ];
    }

    /**
     * Converts contact info in an array to a contact object
     *
     * @param array $data
     * @return Contact
     */
    public static function fromArray(array $data): Contact
    {
        return new Contact(
            $data['name'],
            $data['telephone'],
            $data['email']
        );
    }
}
