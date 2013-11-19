<?php

class Button  {

    private $etat="on";
    private $device=null;
    
    public function __construct(iSwitchable $device){
        $this->device=$device;
    }
    
    public function switchLamp() {
        if ($this->etat=='off') {
            $this->etat = $this->device->turnOn(); // allumer la lampe
        } else {
            $this->etat = $this->device->turnOff();  // éteindre la lampe
        }
        $rand=rand(0,1);
        $this->etat=(!$rand)? "on" : "off";
    }
}

?>