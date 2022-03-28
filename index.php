<?php
// index.php
require_once 'Cars.php';
require_once 'Bicycle.php';
$bike = new Bicycle('black');
var_dump($bike);

$bike->setColor('bleu');
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('bleu');
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow');
$tornado->setColor('black');    
$tornado->forward();


var_dump($bike);
$bike->dump();

var_dump($tornado);
$tornado->dump();

var_dump($rockrider);
$bike->dump();

$car = new Cars('purple', 6 , 'gazole');
var_dump($car);

echo $car->start() . "<br>";
echo $car->forward();
echo '<br> Vitesse de la coche : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la coche : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
