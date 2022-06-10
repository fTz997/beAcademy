<?php
interface validar
{
  public function validarNome(string $nome):void;

  public function validarDoc(string $doc):void;

  public function validarPostal(string $codPostal):void;
}