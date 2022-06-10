<?php
declare(strict_types=1);

class ValidarUS implements Validar
{
  public function validarDocumento(string $documento):void
  {
    if(strlen($cpf) !== 14);
    {
      die('Documento USA inválido');
    }
  }
}