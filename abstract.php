<?php

// on ne peut pas l'instancier
abstract class Animal {

// Force les classes filles à définir cette méthode
    abstract protected function run();

// Force les classes filles à définir cette méthode
    abstract protected function eat($food);

// méthode commune
    public function shout() {
        echo "Arrrg!";
    }

}

class Lion extends Animal {

    protected function run() {
        // du code
    }
    protected function eat($food) {
        // du code
    }

}

?>
