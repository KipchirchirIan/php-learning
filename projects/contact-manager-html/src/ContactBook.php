<?php

declare(strict_types=1);

class ContactBook
{
    private array $contacts = [];
    private string $filePath = '../data/contacts.json';

    /**
     * Add new contact, temporarily
     *
     * @param Contact $contact
     * @return void
     */
    public function add(Contact $contact): void
    {
        $this->contacts[] = $contact;
    }

    /**
     * Save all contacts added temporarily to a persistent storage
     *
     * @return void
     */
    public function save(): void
    {
        $data = array_map(fn($c) => $c->toArray(), $this->contacts);
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT), FILE_APPEND | LOCK_EX);
    }

    /**
     * Load all contacts stored permanently
     *
     * @return void
     */
    public function load(): void
    {
        if (!file_exists($this->filePath)) return;
        $data = json_decode(file_get_contents($this->filePath), true);

        foreach ($data as $item) {
            $this->contacts[] = Contact::fromArray($item);
        }
    }

    public function getAll(): array
    {
        return $this->contacts;
    }
}
