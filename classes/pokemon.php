<?php
    class pokemon {

        public $pokeName;
        public $type;
        public $health;
        public $maxHealth;

        public function setBase($name, $type, $health, $maxHealth) {
            $this->pokeName = $name;
            $this->type = $type;
            $this->health = $health;
            $this->maxHealth = $maxHealth;
        }

        public $attack1;
        public $attack1Damage;
        public $attack2;
        public $attack2Damage;

        public function setAttacks($atk1, $atk1dmg, $atk2, $atk2dmg) {
            $this->attack1 = $atk1;
            $this->attack1Damage = $atk1dmg;
            $this->attack2 = $atk2;
            $this->attack2Damage = $atk2dmg;
        }

        public $weaknessName;
        public $multiplier;

        public function setWeakness($name, $mlt) {
            $this->weaknessName = $name;
            $this->multiplier = $mlt;
        }

        public $resistanceName;
        public $value;

        public function setResistance($name, $value) {
            $this->resistanceName = $name;
            $this->value = $value;
        }

        public function __toString() {
            return json_encode($this);
        }
    }