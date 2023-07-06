<?php

require 'init.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = 'http://localhost' . $uri;
$route = str_replace(BASE_URL, '', $uri);

$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

if (array_key_exists($route, $routes))
{
    require $routes[$route];
}