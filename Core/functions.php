<?php

use Core\Response;
function dd ($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    exit;
}

function urlIS($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}


function abort ($code = 404) {
    
    http_response_code($code);

    require base_path("view/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {

    if (! $condition) {
        abort($status);
    }

    return true;
}


function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

