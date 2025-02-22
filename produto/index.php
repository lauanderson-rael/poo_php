<?php
require_once('./classes/Produto.php');

$produto1 = new Produto();
$produto1->id = 1;
$produto1->setNome('Arroz');
$produto1->setPreco(200);


echo "id: ". $produto1->id . "\n";
echo "preco: ". $produto1->getPreco() . "\n";
$produto1->aumentaPreco(50);
echo "preco: ". $produto1->getPreco() . "\n";
