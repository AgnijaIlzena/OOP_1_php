<?php

require_once 'Car.php';
require_once 'Bike.php';
require_once 'Moto.php';


// VELO's DRIVING

$velo = new Bike ();
$velo->color = 'blue';
$velo->currentSpeed = 0;

$rockrider = new Bike();
$rockrider->color = 'yellow';
$tornado = new Bike();
$tornado->color = 'black';
$tornado->forward();
echo $velo->forward();
echo 'Vitesse du vélo : ' . $velo->currentSpeed . ' km/h ' . PHP_EOL;
echo $velo->brake();
echo 'Vitesse du vélo : ' . $velo->currentSpeed . ' km/h ' . PHP_EOL;
echo $velo->brake() . PHP_EOL;

// CAR's DRIVING

$volga = new Car ('grey', '5', '95E');
$renault = new Car ('red', '7', '95E');
$bmw = new Car ('black', '5', '98E');

$volga->setCurrentSpeed(10);
$renault->setCurrentSpeed(50);
$bmw->setCurrentSpeed(0);
$bmw->setCurrentFuelLevel(5);
echo 'Volga in color: ' . $volga->getColor() .PHP_EOL;
echo 'Volga starts driving' . $volga->start() .PHP_EOL;
echo 'Renault goes faster. ' . $renault->forward() .PHP_EOL;
echo 'BMW stops' . $renault->brake() .PHP_EOL;


// MOTO's RIVING

$myMoto = new Moto ();

echo 'Moto speed : ' . $myMoto->getSpeed() . ' km/h' . PHP_EOL;
echo $myMoto->brake() . PHP_EOL;
echo $myMoto->forward() . PHP_EOL;