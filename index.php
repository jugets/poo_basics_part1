<?php

require_once 'Bicycle.php';
require_once 'Car.php';

echo '<h2> Bicycle objects </h2>';

$bike = new Bicycle ('blue',0);
var_dump($bike);    

echo $bike->forward();
echo '<br> Vitesse du vélo: ' .$bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<hr>';


echo '<h2> Car objects</h2>';

$homerCar = new Car ('pink', 5, 'gasoline');
var_dump($homerCar);

echo $homerCar->start();
echo '<br> Homer\'s car speed: ' .$homerCar->getCurrentSpeed() . 'km/h' . '<br>';
echo $homerCar->forward();
echo '<br> Homer\'s car speed: ' .$homerCar->getCurrentSpeed() . 'km/h' . '<br>';
echo $homerCar->brake();
echo '<br> Homer\'s car speed : ' . $homerCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerCar->brake();