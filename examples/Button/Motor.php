<?php

class Motor implements iSwitchable {

    public function turnOff() {
        return "off";
    }

    public function turnOn() {
        return "on";
    }
    // autre chose propre au Motor...
}

?>
