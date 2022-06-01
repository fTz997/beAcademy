<?php



/*
 É iniciado como um array vazio 

 se inserir na url -> ?nome=Victor&cidade=Ribeirão%20Preto&cor=verde

 a informação dada na url 
*/

// Exemplo de uso do metodo get

if($_GET) {
  echo $_GET['nome'] . "</br>";
  echo $_GET['cidade'] . "</br>";
  echo $_GET['cor'] . "</br>";

}

?>