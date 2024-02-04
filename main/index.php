<?php
class Car {
    public $color;
    public $max_speed;
    public $model;
    public $brand;

    public function __construct ($color, $max_speed, $model, $brand) {
        $this -> color = $color;
        $this -> max_speed = $max_speed;
        $this -> model = $model;
        $this -> brand = $brand;
    }

    public function move() {
        //
    }

    public function turn() {
        //
    }

    public function setColor($color) {
        $this -> color = $color;
    }
    public function getColor() {
        return $this -> color;
    }
}

// $car1 = new Car;
// $car1 -> color = 'red';
// $car1 -> max_speed = 200;
// $car1 -> model = 'avensis';
// $car1 -> brand = 'toyota';

// echo $car1 -> color."<br>";
// echo $car1 -> max_speed."<br>";
// echo $car1 -> model."<br>";
// echo $car1 -> brand."<br>";

// $car1 -> move();

// $car1 -> setColor('black');
// echo $car1 -> getColor();

$car2 = new Car('white', 180, 's-type', 'jaguar');
echo $car2 -> getColor();


//
class Worker {
    public $name;
    public $surname;
    public $salary;

    public function __construct ($name, $surname, $salary) {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> salary = $salary;
    }
    public function setSurname($surname) {
        $this -> surname = $surname;
    }
    public function getSurname() {
        return $this -> surname;
    }
}

$worker1 = new Worker('Ivan', 'Ivanov', 12000);
echo $worker1 -> getSurname()."<br>";

$worker2 = new Worker('Peter', 'Petrov', 27500);
echo $worker2 -> getSurname()."<br>";

// $worker1 = new Worker;
// $worker1 -> name = 'Ivan';
// $worker1 -> surname = 'Ivanov';
// $worker1 -> salary = 12000;
// echo $worker1 -> surname."<br>";

// $worker2 = new Worker;
// $worker2 -> name = 'Peter';
// $worker2 -> surname = 'Petrov';
// $worker2 -> salary = 27500;
// echo $worker2 -> surname."<br>";


echo $worker1->salary + $worker2->salary;

?>