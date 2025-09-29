<?php

class Bicycle {
    public string $brand;
    public string $model;
    public int $year;
    public string $description = 'Used bicycle';
    public float $weight_kg = 0.0;

    public function name(): void {
        echo "Brand: " .$this->brand . ", Model: " . $this->model . ", Year: " . $this->year . "<br />";
    }

    public function weight_lbs(float $weight_kg): void {
        echo "{$weight_kg}kg converted into lbs is: " . $weight_kg * 2.2046226218 . "lbs<br />";
    }

    public function set_weight_lbs(float $weight_lbs): void {
        $this->weight_kg = $weight_lbs / 2.2046226218;
        echo "{$weight_lbs}lbs converted into kgs is: " . $this->weight_kg . "kgs <br />";
    }
}

$bike1 = new Bicycle;
$bike1->brand = 'BMW';
$bike1->model = 'i10';
$bike1->year = 2021;
$bike1->description = "The latest BMW bike from the i series edition";
$bike1->weight_kg = 10.5;

$bike1->name();
$bike1->weight_lbs($bike1->weight_kg);

echo "<br /><br />";

$bike2 = new Bicycle;
$bike2->brand = 'Pathfinder';
$bike2->model = 'P180';
$bike2->year = 2025;
$bike2->description = "The mountain bike edition from the Pathfinder bikes";

$bike2->set_weight_lbs(15.0);

$bike2->name();

echo "The {$bike2->brand} {$bike2->model} weighs " . $bike2->weight_kg . "kgs <br />";

$bike2->weight_lbs($bike2->weight_kg);
