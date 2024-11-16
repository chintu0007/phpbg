<?php
function dd ($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    exit;
}

function urlIS($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) {

    if (! $condition) {
        abort($status);
    }
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

