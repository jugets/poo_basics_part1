<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

// echo '<h2> Bicycle objects </h2>';

// $bike = new Bicycle ('blue',0);
// var_dump($bike);    

// echo $bike->forward();
// echo '<br> Vitesse du vélo: ' .$bike->getCurrentSpeed() . 'km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// echo '<hr>';


// echo '<h2> Car objects</h2>';

// $homerCar = new Car ('pink', 5, 'gasoline');
// var_dump($homerCar);

// echo $homerCar->start();
// echo '<br> Homer\'s car speed: ' .$homerCar->getCurrentSpeed() . 'km/h' . '<br>';
// echo $homerCar->forward();
// echo '<br> Homer\'s car speed: ' .$homerCar->getCurrentSpeed() . 'km/h' . '<br>';
// echo $homerCar->brake();
// echo '<br> Homer\'s car speed : ' . $homerCar->getCurrentSpeed() . ' km/h' . '<br>';
// echo $homerCar->brake();

$bicycle = new Bicycle('blue',1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(8000, 'red', 3, 'electric');
var_dump($truck);

echo $truck->forward();
echo '<br>';
echo $truck->brake();
echo '<br>';
echo 'Charge : '.$truck-> getCharge();
echo '<br>';
echo $truck->isFull();

$truckFull = new Truck(8000, 'red', 3, 'electric');
var_dump($truckFull);

echo $truckFull->forward();
echo '<br>';
echo $truckFull->brake();
echo '<br>';
echo 'Charge : '.$truckFull->getCharge();
echo '<br>';
echo $truckFull->isFull();
echo '<br>';
$truckFull->setCharge(8000);
echo 'Charge : '.$truckFull-> getCharge();
echo '<br>';
echo $truckFull->isFull();