<?php

declare(strict_types=1);

class Gestor extends Usuario
{
  
  private float $salario;
  private string $turno;

  public function __construct(string $email, string $senha, float $salario)
  {
    parent::setEmail($email);
    parent::setSenha($senha);
    $this->salario = $salario;
  }

  public function getSalario():float 
  {
    return $this->salario;
  }
  public function setSalario(float $salario):void 
  {
    $this->salario = $salario;
  }

  public function getTurno():string 
  {
    return $this->turno;
  }
  public function setTurno(string $turno):void
  {
    $this->turno = $turno;
  }

}