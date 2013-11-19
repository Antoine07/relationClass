<?php

require_once'../Autoloader/Autoloader.php';

$autoloader=new Autoloader;

$b = new Button(new Lamp);

$b->switchLamp();
var_dump($b);
$b->switchLamp();
var_dump($b);
$b->switchLamp();
var_dump($b);
$b->switchLamp();
var_dump($b);

$m=new Button(new Motor);
$m->switchLamp();
var_dump($m);
$m->switchLamp();
var_dump($m);
$m->switchLamp();
var_dump($m);


// mais si j'instancie quelque chose qui ne respecte pas le contrat iSwtichtable alors BADABOUM
//
//class A{}
//new Button(new A);

?>
