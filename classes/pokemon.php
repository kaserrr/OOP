<?php

class Pokemon {
    private $name;
    private $hitPoints;
    private $health;

    function __construct($name, $hitPoints, $health){
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
    }

    public function __toString() {
        return json_encode($this);
    }
}