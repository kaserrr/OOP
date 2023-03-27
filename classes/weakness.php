<?php

class Weakness extends Pokemon {
    protected $energyType;
    protected $multiplier;

    function __construct($energyType, $multiplier){
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
}