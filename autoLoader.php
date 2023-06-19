<?php

// Autoloader that includes all files from the classes directory
spl_autoload_register(function($className){
    $file = 'classes/' . $className . '.php';
    if(file_exists($file)){
        include $file;
    }
});


