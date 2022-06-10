<?php

declare(strict_types=1);

class Produto 
{
  private string $nome;
  private float $valor;


  public function getNome():string 
  {
    return $this->nome;
  }
  public function setNome(string $nome):void 
  {
    $this->nome = $nome;
  }

  public function getValor():float 
  {
    return $this->valor;
  }
  public function setValor(float $valor):void 
  {
    if ($valor < 0){
      die ("O valor deve ser positivo");
    }
    
    $this->valor = $valor;
  }
}