<?php

$senha = '12345';
$code = 'MTIzNDU=';
echo base64_encode($senha);
echo base64_decode($code);