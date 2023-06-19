<?php

abstract class Pokemon {
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;
    protected static $population = 0;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$population++;
    }

    public function attack($target, $attackIndex) {
        $attack = $this->attacks[$attackIndex];
        $damage = $attack->getDamage();

        // Check weakness
        if ($target->getEnergyType() === $this->weakness->getEnergyType()) {
            $damage *= $this->weakness->getMultiplier();
        }

        // Check resistance
        if ($target->getEnergyType() === $this->resistance->getEnergyType()) {
            $damage -= $this->resistance->getValue();
        }

        $target->takeDamage($damage);
    }

    public function takeDamage($damage) {
        $this->health -= $damage;

        if ($this->health <= 0) {
            $this->health = 0;
            self::$population--;
        }
    }

    public static function getPopulation() {
        return self::$population;
    }

    // Encapsulation: Getters & Setters
    public function getName() {
        return $this->name;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

    public function getHitpoints() {
        return $this->hitpoints;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getAttacks() {
        return $this->attacks;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function getResistance() {
        return $this->resistance;
    }
}

