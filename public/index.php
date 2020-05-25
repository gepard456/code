<?php

require '../vendor/autoload.php';

$routes = [
    "/"         => "../app/controllers/homepage.php",
    "/product"  => "../app/controllers/product.php",
    "/user"     => "../app/controllers/user.php",
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes))
    include $routes[$_SERVER['REQUEST_URI']];
else
    include "../app/controllers/404.php";