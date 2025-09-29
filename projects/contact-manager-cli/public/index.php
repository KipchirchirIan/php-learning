<?php
declare(strict_types=1);

require_once '../src/Contact.php';
require_once '../src/ContactBook.php';

$book = new ContactBook();
$book->load();

// Add contacts
$contact1 = new Contact('John Doe', '+254720123456', 'j.doe@mail.com');
$book->add($contact1);

$book->add(new Contact('Ian', '+254721123123', 'ian@mail.com'));

// Save contacts
$book->save();

$book->listAll();