<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' =>  "controller/index.php",
    '/contact' =>  "controller/contact.php",
    '/about' =>  "controller/about.php",
];

function routeToController( $uri , $routes){

    if(array_key_exists($uri , $routes)){
        return require $routes[$uri];
    }else{
        abort();
    }
}

return routeToController($uri , $routes);