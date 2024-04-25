<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isURL($value){
    return parse_url($_SERVER["REQUEST_URI"])["path"] === $value;
}

function isActive($value){
    return $value == 1;
}

function abort($code = 404){
    http_response_code($code);
    $title = "{$code}";
    $headerName = "{$code}";
    require "views/{$code}.php";
    die();
}

function formatToFullName($firstName, $middleName, $lastName){
    return $firstName . " " . $middleName . " " . $lastName;
}

function isAuthorized($condition, $status = 403){
    if(!$condition)
        abort($status);
}

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
    else{
        abort();
    }
}