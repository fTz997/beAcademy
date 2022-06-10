<?php

declare(strict_types=1);

class Produto 
{
  private string $nome;
  private float $valor;
  private string $descricao;
  private readonly Categoria $categoria;

  public function __construct(string $nome, float $valor, Categoria $categoria)
  {
    $this -> categoria = $categoria;
    $this -> nome = $nome;
    $this -> valor = $valor;
  }

  // Nome
  public function getNome():string 
  {
    return $this->nome;
  }
  public function setNome(string $nome):void 
  {
    $this->nome = $nome;
  }

  // Valor
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

  // Descrição
  public function getDescricao():string
  {
    return $this -> descricao;
  }
  public function setDescricao(string $descricao):void 
  {
    $this->descricao = $descricao;
  }

  public function setCategoria(Categoria $categoria):void 
  {
    $this -> categoria = $categoria;
  }
}