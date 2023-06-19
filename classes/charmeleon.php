<?php


class Charmeleon extends Pokemon {
    public function __construct(){
        $name = "Charmeleon";
        $energyType = new EnergyType("Fire");
        $hitPoints = 60;
        $attacks = [new Attack("Head Butt", 10), new Attack("Flare", 30)];
        $weakness = new Weakness("water", 2);
        $resistance = new Resistance("lightning", 10);
        parent::__construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
    }
}