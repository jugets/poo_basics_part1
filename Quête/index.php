<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$motorWay = new MotorWay([]);
$pedestrianWay = new PedestrianWay([]);
$residentialWay = new ResidentialWay([]);

$bicycle = new Bicycle('blue',1);
//var_dump($bicycle);
$motorWay -> addVehicle($bicycle);
$pedestrianWay -> addVehicle($bicycle);
$residentialWay -> addVehicle($bicycle);

$skateboard = new Skateboard('green',1);
//var_dump($skateboard);
$motorWay -> addVehicle($skateboard);
$pedestrianWay -> addVehicle($skateboard);
$residentialWay -> addVehicle($skateboard);

$car = new Car('green', 4, 'electric');
//var_dump($car);
$motorWay -> addVehicle($car);
$pedestrianWay -> addVehicle($car);
$residentialWay -> addVehicle($car);

$truck = new Truck(8000, 'red', 3, 'electric');
//var_dump($truck);
$motorWay -> addVehicle($truck);
$pedestrianWay -> addVehicle($truck);
$residentialWay -> addVehicle($truck);

$truckFull = new Truck(8000, 'red', 3, 'electric');
//var_dump($truckFull);
$motorWay -> addVehicle($truckFull);
$pedestrianWay -> addVehicle($truckFull);
$residentialWay -> addVehicle($truckFull);

var_dump($motorWay->getCurrentVehicles()); 
var_dump($pedestrianWay->getCurrentVehicles()); 
var_dump($residentialWay->getCurrentVehicles()); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Programmation orientée objet - Quêtes classe "vehicles"</h2>
    <h3>Bicycle</h3>
    <div> 
        <p><?=$bicycle->forward()?></p>
    </div>
    <h3>Skateboard</h3>
    <div> 
        <p><?=$skateboard->forward()?></p>
    </div>
    <h3>Car</h3>
    <div> 
        <p><?=$car->forward()?></p>
        <p>Allowed energies: <?php
        foreach(Car::ALLOWED_ENERGIES as $value){
            echo $value.' ';
        }
        ?></p>
    </div>
    <h3>Truck</h3>
    <div> 
        <p><?=$truck->forward()?></p>
        <p><?=$truck->brake()?></p>
        <p>Charge :<?=$truck-> getCharge()?></p>
        <p><?=$truck->isFull()?></p>
    </div>
    <h3>Full truck</h3>
    <div> 
        <p><?=$truckFull->forward()?></p>
        <p><?=$truckFull->brake()?></p>
        <p>Charge :<?=$truck-> getCharge()?></p>
        <p><?=$truck->isFull()?></p>
        <?php $truck->setCharge(8000)?>
        <p>Charge :<?=$truck-> getCharge()?></p>
        <p><?=$truck->isFull()?></p>
    </div>
</body>
</html>