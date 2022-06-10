<?php

declare(strict_types=1);

final class Cliente extends Usuario // final determina que não existirá clases filhas dessa classe
{
  private string $dataCadastro;

  public function __construct(string $email, string $senha, string $dataDeCadastro)
  {
    parent::setEmail($email);
    parent::setSenha($senha);
    $this->dataCadastro = $dataCadastro;
  }

  public function getDataCadastro():string 
  {
    return $this->dataCadastro;
  }
  public function setDataCadastro(string $dataCadastro):void 
  {
    $this->dataCadastro = $dataCadastro;
  }
}