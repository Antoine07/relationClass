<?php
// on connait déjà ce sujet revoir le cours 

class Animal{}

class Mammal extends Animal{}

final class Lion extends Mammal{} // stop l'arbre d'héritage à ce niveau

$lion = new Lion;
var_dump($lion);
?>
