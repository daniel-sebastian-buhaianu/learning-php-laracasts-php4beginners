<?php

function getView(string $viewName, array $vars): string|false
{
    ob_start();
    include 'views/' . $viewName . '.view.php';
    return ob_get_clean();
}

function urlIs($value)
{
    return getUri() === $value;
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes))
    {
        require $routes[$uri];
    }
    else
    {
        abort();
    }
}

function abort()
{
    $announcement = 'Announcement: Page Not Found. ';
    $heroTitle = '404 Error';
    $heroText = 'This page doesn\'t exist.';
    $pageTitle = '404';

    http_response_code(404);
    require 'views/layout.view.php';
    die();
}

function getUri()
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $uri = 'http://localhost' . $uri;
    $uri = str_replace(BASE_URL, '', $uri);

    return $uri;
}

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}