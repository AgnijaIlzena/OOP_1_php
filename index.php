<?php

require 'Car.php';

$volga = new Car ('grey', '5', '95E');
$renault = new Car ('red', '7', '95E');
$bmw = new Car ('black', '5', '98E');

$volga->setCurrentSpeed(10);
$renault->setCurrentSpeed(50);
$bmw->setCurrentSpeed(0);
$bmw->setCurrentFuelLevel(5);
echo 'Volga in color: ' . $volga->getColor() .PHP_EOL;
echo 'Volga starts driving' . $volga->start() .PHP_EOL;
echo 'Renault goes faster' . $renault->forward() .PHP_EOL;
echo 'BMW stops' . $renault->brake() .PHP_EOL;