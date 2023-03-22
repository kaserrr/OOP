<?php
    include_once 'pokemonMethods.php';

    $pikachu = new Pokemon("Pikachu", "Lightning", 60, 60, "Electric Ring", 50, "Pika Punch", 20, "Fire", 1.5, "Fighting", 20);

    $charmeleon = new Pokemon("Charmeleon", "Fire", 60, 60, "Head Butt", 10, "Flare", 30, "Water", 2, "Lighting", 10);


    print_r($pikachu);

    print_r($charmeleon);