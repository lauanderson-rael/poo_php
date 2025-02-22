<?php
declare(strict_types=1);

require_once('./classes/Escritor.php');
require_once('./classes/Caneta.php');

$escritor = new Escritor();
$escritor->setNome("Lauanderson Rael");

$caneta = new Caneta("Bic");

$escritor->setCaneta($caneta);
$escritor->getCaneta()->escrever();


print_r($escritor);
