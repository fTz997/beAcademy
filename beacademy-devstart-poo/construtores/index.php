<?php

include 'Produto.php';
include 'Categoria.php';

$cat1 = new Categoria('Roupas', 'Roupas unissex');
$cat2 = new Categoria('Roupas de banho', 'Toalhas, toalhas para rosto');
$cat3 = new Categoria('Calçados', 'Calçados em geral');

$prod1 = new Produto("Tenis de corrida", 300, $cat3);
$prod2 = new Produto("Calça jeans", 100, $cat1);
$prod3 = new Produto('Calça branca', 150, $cat1);