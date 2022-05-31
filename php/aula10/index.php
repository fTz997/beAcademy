<?php

$notas = [10, 9, 9.5, 7];
$notas2 = [8, 7, 9.5, 4];

function mediaNotas(array $notas): float
{

  /*
  $total = 0;
  $quantidade = 0;
  foreach($notas as $nota){
    $total += $nota;
    $quantidade++;
  }

  return $total/$quantidade;*/

  return array_sum($notas)/ count($notas);
}

echo mediaNotas($notas).PHP_EOL;
echo mediaNotas($notas2).PHP_EOL;
