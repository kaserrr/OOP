<?php

namespace PokemonApp\Classes;


spl_autoload_register(function ($class_name) {
    // Remove the "PokemonApp\" prefix from the class name
    $class_name = str_replace('PokemonApp\\', '', $class_name);
    
    // Convert the namespace separator (\) to the directory separator (/)
    $file_name = str_replace('\\', '/', $class_name) . '.php';
    
    // Construct the file path
    $file_path = __DIR__ . '/classes/' . $file_name;
    
    // Check if the file exists
    if (file_exists($file_path)) {
        require_once $file_path;
    }
});


