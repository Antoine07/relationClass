<?php
// RaspberryPi<>--------Sd

class RaspberryPi{
    protected $sd;
    
    public function setSd(Sd $sd){
        $this->sd=$sd;
    }
    
    public function getSd(){
        return $this->sd;
    }
}

// carte sd pour raspberry pi
class Sd{
    
}

$raspberry=new RaspberryPi;

$raspberry->setSd(new Sd);



?>
