<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

}

function currentPageIs($page){
    return $_SERVER['REQUEST_URI']== $page;
}
function abort($code=404){
    http_response_code($code);
    return require "views/$code.php";
    die();
}