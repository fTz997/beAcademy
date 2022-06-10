<?php

declare(strict_types=1);

class GestorGeral extends Gestor 
{
  private float $bonusAnual;

  private function getBonusAnual():float 
  {
    return $this->BonusAnual;
  }

  private function setBonusAnual(float $bonusAnual):void 
  {
    $this->bonusAnual = $bonusAnual;
  }
}