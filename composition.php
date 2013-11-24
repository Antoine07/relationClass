<?php
// composition 
// Un objet RaspberryPi est composé d'un objet ARM (l'objet RaspberryPi contient un objet Arm)
// relation forte !

class RaspberryPi{
    protected $arm;
    
    public function __construct(){
        $this->b=new Arm;
    }
}

// micro precessor
class Arm{
  
}

// second example, un ferry est composé d'un parking
class Ferry{
    private $parking=null;
    
    public function __construct(Parking $parking){
        $this->parking=$parking;
    }
}

// class Parking

class Parking{}



?>
