<?php 

use App\Controller\IndexController;
use App\Controller\CategoryController;
use App\Controller\ProductController;

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
  '/product/novo' => createRoute(ProductController::class, 'addAction'),

  '/categorias' => createRoute(CategoryController::class, 'listAction'),
  '/categorias/nova' => createRoute(CategoryController::class, 'addAction'),
  '/categorias/excluir' => createRoute(CategoryController::class, 'removeAction'),
  '/categorias/editar' => createRoute(CategoryController::class, 'updateAction'),

];

return $routes;