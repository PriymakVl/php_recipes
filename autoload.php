<?php

// function model_autoloader($class) {
//     if($class == "Recipe" || $class == "Tag" || $class == "RecipeTag" || $class == "Tool"){
//         require_once __DIR__ . "/app/models/" . $class . ".php"; 
//     }
// }

function helper_autoloader($class) {
    if($class == "Validate" || $class == "File" || $class == "Message"){
        require_once __DIR__ . "/app/helpers/" . $class . ".php"; 
    }
}

function model_autoloader($class) {
    $file_path = __DIR__ . "/app/models/" . $class . ".php"; 
    switch($class) {
        case 'Recipe': return require_once $file_path;
        case 'Tag': return require_once $file_path;
        case 'RecipeTag': return require_once $file_path;
        case 'Tool': return require_once $file_path;
        case 'Ingredient': return require_once $file_path;
        case 'Instruction': return require_once $file_path;
    }
}


spl_autoload_register('model_autoloader');

spl_autoload_register('helper_autoloader');
