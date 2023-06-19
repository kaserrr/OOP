<?php

// Extended child class from parent Pokemon class
class Pikachu extends Pokemon {
    public function __construct(){
        $name = "Pikachu";
        $energyType = new EnergyType("Electric");
        $hitPoints = 60;
        $attacks = [new Attack("Electric Ring", 50), new Attack("Pika Punch", 20)];
        $weakness = new Weakness("fire", 1.5);
        $resistance = new Resistance("fighting", 20);
        parent::__construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
    }
}