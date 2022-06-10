<?php
//fopen("nome-do-arquivo", "permissão") -> tipos de permissoes: a+ (leitura e escrita), w (escrita), r (leitura)

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo,"Victor".PHP_EOL);

fclose($arquivo);