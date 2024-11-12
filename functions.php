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
