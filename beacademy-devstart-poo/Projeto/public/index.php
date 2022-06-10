<?php 

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;


$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute (string $controllerName, string $methodName){
  return [
    'controller' => $controllerName,
    'method' => $methodName,
  ];
}

$routes = [
  '/' => createRoute(IndexController::class, 'indexAction'),
  '/login' => createRoute(IndexController::class, 'loginAction'),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  '/product/add' => createRoute(ProductController::class, 'addAction'),
  '/product/edit' => createRoute(ProductController::class, 'editAction'),
  '/category' => createRoute(categoryController::class, 'categoryAction'),
  
];

if (false === isset($routes[$url])){
  (new ErrorController())-> notFoundAction();
  exit;  
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

//echo 'Ola mundo';