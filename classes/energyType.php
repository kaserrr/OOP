<?php

class EnergyType extends Pokemon {
    protected $energyType;

    function __construct($energyType){
        $this->energyType = $energyType;
    }
}