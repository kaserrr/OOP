<?php

class Base extends Pokemon{
    protected $name;
    protected $hitPoints;
    protected $health;

    function __construct($name, $hitPoints, $health){
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
    }
}

