<?php
// autoloader 
spl_autoload_register(function ($class) {
            include 'package/'.$class.'.php';
        }
);

// on peut garer une voiture dans le parking

$byke=new Byke();
$car=new Car();

$parking=new Parking();
$parking->addPark($byke);
$parking->addPark($car);


var_dump($parking->count());
var_dump($parking->getAll());


// on peut retirer un véhicule
//$parking->remove($car);

var_dump($parking->count());
var_dump($parking->getAll());

// on ne peut pas garer un avion dans un parking ceci conduira à une erreure fatale

// $parking->addPark(new Plane);

// on peut mettre ce parking dans le ferry
$ferry=new Ferry($parking);
var_dump($ferry);

$tram=new Tram();
$parking->addPark($tram);
var_dump($parking->getAll());

?>
