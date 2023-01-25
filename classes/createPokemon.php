<?php
    $pikachu = new Pokemon();
    $pikachu->setBase("Pikachu", "Lightning", 60, 60);
    $pikachu->setAttacks("Electric Ring", 50, "Pika Punch", 20);
    $pikachu->setWeakness("Fire", 1.5);
    $pikachu->setResistance("Fighting", 20);

    $charmeleon = new Pokemon();
    $charmeleon->setBase("Charmeleon", "Fire", 60, 60);
    $charmeleon->setAttacks("Head Butt", 10, "Flare", 30);
    $charmeleon->setWeakness("Water", 2);
    $charmeleon->setResistance("Lighting", 10);