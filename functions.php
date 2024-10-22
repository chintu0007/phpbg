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