<?php

$url = $_SERVER['REQUEST_URI'];

echo match($url){
  '/' => "<h1>Página inicial</h1>",
  '/login' => "<h1>Página de login</h1>",
  '/cadastro' => "<h1>Página de cadastro</h1>",
  default => 'página inexistente',
}

?>