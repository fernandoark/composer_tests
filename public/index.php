<?php

use Respect\Rest\Router;

require_once "../vendor/autoload.php";

$router = new Router();
$router->get("/products", "WebStore\Http\Controller\ProductsController");
$router->get("/categories", "WebStore\Http\Controller\CategoriesController");
