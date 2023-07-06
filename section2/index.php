<?php

require 'init.php';

$url = 'http://localhost' . $_SERVER['REQUEST_URI'];
switch ($url)
{
    case BASE_URL . '/':
        require 'controllers/home.php';
        break;
    case BASE_URL . '/about';
        require 'controllers/about.php';
        break;
    case BASE_URL . '/contact':
        require 'controllers/contact.php';
        break;
    default:
        require 'controllers/page-not-found.php';
}