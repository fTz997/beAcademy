<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;
use Dompdf\Dompdf;

$us2 = new Usuario();
$c1 = new Categoria();

$dompdf = new Dompdf();

$dompdf->loadHtml('Hello world');
$dompdf->setPaper('A4', 'landscape');//default
$dompdf->render();
$dompdf->stream();