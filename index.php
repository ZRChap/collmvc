<?php
session_start();

define('ROOT', dirname(__FILE__));

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

require_once(ROOT . '\core\bootstrap.php');