<?php

function dmgCalculator($energytype1, $energytype2, $attack, $multiplier) {
    if($energytype1 === $energytype2) {
        echo $attack * $multiplier;
    } else {
        echo 'no';
    }
}