<?php
    spl_autoload_register(function($class) {
        require_once "classes/{$class}.php";
    });

    require_once "classes/createPokemon.php";
    require_once "classes/pokemon.php";
    require_once "classes/pokeBattle.php";



