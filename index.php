<?php

require "autoLoader.php";

$pikachu = new Pikachu();
$charmeleon = new Charmeleon();

echo "Before Attack:\n";
echo $pikachu->getName() . " health: " . $pikachu->getHealth() . "\n";
echo $charmeleon->getName() . " health: " . $charmeleon->getHealth() . "\n";

echo "Population: " . Pokemon::getPopulation() . "\n";

$pikachu->attack($charmeleon, 0);
$charmeleon->attack($pikachu, 1);

echo "After Attack:\n";
echo $pikachu->getName() . " health: " . $pikachu->getHealth() . "\n";
echo $charmeleon->getName() . " health: " . $charmeleon->getHealth() . "\n";

echo "Population: " . Pokemon::getPopulation() . "\n";