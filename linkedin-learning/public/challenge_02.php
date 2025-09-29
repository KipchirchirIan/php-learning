<?php

declare(strict_types=1);

class Animal
{
    public int $noOfLegs = 0;
    public bool $isDomestic = false;

    public function makeSound(): void
    {
        echo "Unknown <br />";
    }

    public function move(): void
    {
        echo "Unknown <br />";
    }
}

class Dog extends Animal
{
    public string $petName = 'Lambo';
    public int $noOfLegs = 4;
    public bool $isDomestic = true;

    public function makeSound(): void
    {
        echo "Woof! <br />";
    }

    public function move(): void
    {
        echo "Walks! <br />";
    }
}

class Cat extends Animal
{
    public string $petName = 'Whiskers';
    public int $noOfLegs = 4;
    public bool $isDomestic = true;

    public function makeSound(): void
    {
        echo "Meow! <br />";
    }

    public function move(): void
    {
        echo "Struts! <br />";
    }
}

class Chicken extends Animal
{
    public int $noOfLegs = 2;
    public bool $isDomestic = true;

    public function makeSound(): void
    {
        echo "Cluck! <br />";
    }

    public function move(): void
    {
        echo "Flies! <br />";
    }
}

class Lion extends Animal
{
    public int $noOfLegs = 4;
    public bool $isDomestic = false;

    public function makeSound(): void
    {
        echo "Roar! <br />";
    }

    public function move(): void
    {
        echo "Walks! <br />";
    }
}

class Snake extends Animal
{
    public bool $isDomestic = true;

    public function makeSound(): void
    {
        echo "Hiss! <br />";
    }

    public function move(): void
    {
        echo "Slithers! <br />";
    }
}


$a = new Animal;
$a->makeSound();
$a->move();

echo  get_class($a) . " has {$a->noOfLegs} legs. <br />";

echo "<br /><br />";

$d = new Dog;
echo get_class($d) . " has {$d->noOfLegs} legs. <br />";
echo "Is " . get_class($d) . " a domestic animal? " . $d->isDomestic . " <br />";
$d->makeSound();
$d->move();

echo "<br /><br />";

$c = new Cat;
echo get_class($c) . " has {$c->noOfLegs} legs. <br />";
echo "Is " . get_class($c) . " a domestic animal? " . $c->isDomestic . " <br />";
$c->makeSound();
$c->move();

echo "<br /><br />";

$s = new Snake;
echo get_class($s) . " has {$s->noOfLegs} legs. <br />";
echo "Is " . get_class($s) . " a domestic animal? " . $s->isDomestic . " <br />";
$s->makeSound();
$s->move();

echo "<br /><br />";