<?php

$frutas =[
  'Laranja ',
  'Banana',
  'Abacaxi'
];

$frutas[] = 'Maça';

echo '<ul>';
for ($n = 0; $n <= 3; $n++){
  echo "<li> Fruta " . $frutas[$n] . "</li>";
}
echo '</ul>'
?>

