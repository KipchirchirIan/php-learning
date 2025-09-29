<?php

class Bicycle
{
    public string $brand;
    public string $model;
    public int $year;
    protected int $wheels = 2;
    public string $description = 'Used bicycle';
    private float $weight_kg = 0.0;

    public function name(): void
    {
        echo "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year . "<br />";
    }

    public function set_weight_kg(float $weight_kg): void {
        $this->weight_kg = $weight_kg;
    }

    public function weight_kg(): void {
        echo $this->weight_kg . "kg";
    }

    public function weight_lbs(): void
    {
        $weight_lbs = $this->weight_kg * 2.2046226218;
        echo $weight_lbs . "lbs";
    }

    public function set_weight_lbs(float $weight_lbs): void
    {
        $this->weight_kg = $weight_lbs / 2.2046226218;
    }

    public function wheel_details(): void
    {
        echo "It has " . $this->wheels . " wheel(s). <br />";
    }
}

class Unicycle extends Bicycle {
    protected int $wheels = 1;
}

$bike1 = new Bicycle;
$bike1->brand = 'BMW';
$bike1->model = 'i10';
$bike1->year = 2021;
$bike1->description = "The latest BMW bike from the i series edition";
$bike1->set_weight_kg(10.5);


$bike1->name();
$bike1->weight_kg();
echo  "<br />";
$bike1->wheel_details();
// $bike1->weight_lbs($bike1->weight_kg());

echo "<br /><br />";

$bike2 = new Bicycle;
$bike2->brand = 'Pathfinder';
$bike2->model = 'P180';
$bike2->year = 2025;
$bike2->description = "The mountain bike edition from the Pathfinder bikes";

$bike2->set_weight_lbs(15.0);

$bike2->name();
$bike2->weight_kg();
echo  "<br />";
$bike2->wheel_details();

echo "<br /><br />";


$uni = new Unicycle;
$uni->brand = 'Lambo';
$uni->model = 'Uni';
$uni->year = 2000;
$uni->description = "The best unicycle";
$uni->set_weight_kg(1.5);

$uni->name();
$uni->weight_kg();
echo  "<br />";
$uni->wheel_details();

echo "<br /><br />";