<?php
declare(strict_types=1);
require_once('./classes/Produto.php');
require_once('./classes/CarrinhoCompras.php');

$p1 = new Produto('Arroz', 4);
$p2 = new Produto('Feijao', 5);

$carrinho1 = new CarrinhoCompras();
$carrinho1->addproduto($p1);
$carrinho1->addproduto($p2);
$lista = $carrinho1->getprodutos();

// print_r($carrinho1);s

foreach($lista as $produto){
    echo "{$produto->getNome()} - R$ {$produto->getPreco()}\n";
}

# destruindo carrinho
unset($carrinho1);

#produtos permanecem na memoria
echo "{$p1->getNome()} - ";
echo "{$p2->getNome()}";
