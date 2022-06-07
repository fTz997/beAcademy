<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$a = 10; //int
$b = 'dez'; //string

$a1 = new Aluno();
$a1->nome = "Victor";
$a1->cpf = "123.123.123-13";

$cursoPHP = new Curso();
$cursoPHP->nome = "Introdução ao PHP";
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o basico e intermediário do PHP';