<?php

class Attack extends Pokemon {
    protected $attack1;
    protected $attack1Damage;
    protected $attack2;
    protected $attack2Damage;

    function __construct($attack1, $attack1Damage, $attack2, $attack2Damage){
        $this->attack1 = $attack1;
        $this->attack1Damage = $attack1Damage;
        $this->attack2 = $attack2;
        $this->attack2Damage = $attack2Damage;
    }
}
