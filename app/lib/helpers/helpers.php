<?php

// var_dump and die
function dnd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

// print_r and die
function pnd($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

// sanitize user input
function sanitize($dirty) {
    return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}