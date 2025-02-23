<?php
declare(strict_types=1);

require_once('Produto.php');
require_once('Carrinho.php');
require_once('Servico.php');

$p1 = new Produto('Arroz', 4.60);
$p2 = new Produto('Feijao', 13.50);
$p3 = new Produto('Macarrao', 10);

$carrinho = new Carrinho();
$carrinho->insere($p1);
$carrinho->insere($p2);
$carrinho->insere($p3);

$s1 = new Servico("Entrega", 300);
$s2 = new Servico("Limpeza", 150);

$carrinho->insere($s1);
$carrinho->insere($s2);
print "Total:". $carrinho->total();
