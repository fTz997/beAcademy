<?php

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chico@email.com', '123456');
$c1->setNome('Chico');
$c1->setDataCadastro('01/01/2019');

$g1 = new Gestor('gesto@email.com', '123123', 6000);
$g1->setNome('Gesto');

$gg1 = new GestorGeral('maria@email.com', '1q2w3e', 9000);

//$cv = new ClienteVip('cv@email.com', '123123');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
//var_dump($cv);