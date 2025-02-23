<?php
declare(strict_types=1);

require_once('Conta.php');
require_once('ContaPoupanca.php');
require_once('ContaCorrente.php');


$cp1 = new ContaPoupana("123", 001, 0);
$cp1->sacar(100);
$cp1->depositar(100);
$cp1->depositar(50);
echo "--------------------------\n";

$cc1 = new ContaCorrente("123333", 002, 0, 100);
$cc1->sacar(15);
$cc1->depositar(4000);
