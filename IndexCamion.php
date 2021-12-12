<?php

require_once 'Camion.php';

$camion = new Camion(50, 'red', 2, 'Bio');
echo $camion->isFull();
//var_dump($camion);