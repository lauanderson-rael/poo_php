<?php
declare(strict_types=1);
require_once('./classes/Endereco.php');
require_once('./classes/Cliente.php');

$cliente1 = new Cliente('João');
$cliente1->setEndereco('Sao Paulo', 'SP');
$cliente1->setEndereco('Rio de Janeiro', 'RJ');

$cliente2 = new Cliente('Maria');
$cliente2->setEndereco('Sao Luiz', 'Ma');
$cliente2->setEndereco('Rio de Janeiro', 'RJ');

echo $cliente1->getNome();
$cliente1->showEnderecos();

echo $cliente2->getNome();
$cliente1->showEnderecos();

print("\nESTE É O FIM! \n");
