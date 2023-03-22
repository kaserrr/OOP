<?php

class Resistance {
    private $energyType;
    private $resistanceValue;

    function __construct($energyType, $resistanceValue){
        $this->energyType = $energyType;
        $this->resistanceValue = $resistanceValue;
    }

    public function __toString() {
        return json_encode($this);
    }
}