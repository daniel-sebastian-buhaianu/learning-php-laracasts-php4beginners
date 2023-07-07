<?php

$uri = getUri();

$routes = require 'routes.php';

routeToController($uri, $routes);