<?php

class Attack {
    private $attack1;
    private $attack1Damage;
    private $attack2;
    private $attack2Damage;

    function __construct($attack1, $attack1Damage, $attack2, $attack2Damage){
        $this->attack1 = $attack1;
        $this->attack1Damage = $attack1Damage;
        $this->attack2 = $attack2;
        $this->attack2Damage = $attack2Damage;
    }

    public function __toString() {
        return json_encode($this);
    }
}
