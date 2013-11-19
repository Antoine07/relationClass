<?php

class Ferry extends Vehicule {
    protected $parking=null;
    
    public function __construct(Parking $parking){
        $this->parking=$parking;
    }
    
    public function getParking(){
        return $this->parking;
    }
}

?>
