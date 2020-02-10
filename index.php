<?php

define('ROOT', dirname(__FILE__));

// Load config and helper functions

require_once(ROOT . '/config/config.php');
require_once(ROOT . '/app/lib/helpers/functions.php');


// Autoload classes

function core_directory_autoload($className) 
{
    $core_className = ROOT . '/core/' . $className . '.php';
    if(file_exists($core_className)) {
        require_once($core_className);
    }
}

function controllers_directory_autoload($className) 
{
    $controllers_className = ROOT . '/app/controllers/' . $className . '.php';
    if(file_exists($controllers_className)) {
        require_once($controllers_className);
    }
}

function models_directory_autoload($className) 
{
    $models_className = ROOT . '/app/models/' . $className . '.php';
    if(file_exists($models_className)) {
        require_once($models_className);
    }
}

spl_autoload_register('core_directory_autoload');
spl_autoload_register('controllers_directory_autoload');
spl_autoload_register('models_directory_autoload');

// Start the session
session_start();

// Explode url into array
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];


// Route the request
Router::route($url);