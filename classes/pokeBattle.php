<?php
    function pokeBattle($pikachu, $charmeleon) {
        echo "Pikachu valt Charmeleon aan met $pikachu->attack1"; ?></br><?php
        echo "Pikachu heeft ". ($pikachu->attack1Damage) . " schade gedaan aan Charmeleon";?></br><?php 
        echo "Charmeleon heeft nog ". ($charmeleon->health - $pikachu->attack1Damage) . " health over";?></br><?php

    }
?>