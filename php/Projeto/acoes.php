<?php 

function login(){
  include 'telas/login.php';
}
function cadastro() {
  include 'telas/cadastro.php';
}
function home() {
  include 'telas/home.php';
}
function listar() {
  $contatos = ['a', 'b', 'c'];
  include 'telas/listar.php';
}
function not_found() {
  include 'telas/404.php';
}

function footer() {
  include 'telas/footer.php';
}