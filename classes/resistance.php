<?php

class Resistance extends Pokemon {
    protected $energyType;
    protected $resistanceValue;

    function __construct($energyType, $resistanceValue){
        $this->energyType = $energyType;
        $this->resistanceValue = $resistanceValue;
    }
}