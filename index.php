<?php
    include_once 'autoLoader.php';
    include_once 'damageCalculator.php';

    $pikachu = new Pokemon(
        $base = new Base("Pikachu", 60, 60),
        $attack = new Attack("Electric Ring", 50, "Pika Punch", 20),
        $weakness = new Weakness("Fire", 1.5),
        $resistance = new Resistance("Fighting", 20),
        $energytype = new EnergyType("Lightning")
    );

    $charmeleon = new Pokemon(
        $base = new Base("Charmeleon", 60, 60),
        $attack = new Attack("Head Butt", 10, "Flare", 30),
        $weakness = new Weakness("water", 2),
        $resistance = new Resistance("Lightning", 10),
        $energytype = new EnergyType("Fire")
    );

    $energytype1 = $charmeleon->getData('weakness')->getData('energyType');

    $energytype2 = $pikachu->getData('energytype')->getData('energyType');

    $attack = $pikachu->getData('attack')->getData('attack1Damage');

    $multiplier = $charmeleon->getData('weakness')->getData('multiplier');

    dmgCalculator($energytype1, $energytype2, $attack, $multiplier);