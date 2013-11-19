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


?>
