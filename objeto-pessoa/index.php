<?php
require_once('./classes/Pessoa.php');

$joao = new Pessoa('Joao', 30);
$joao->apresentar();
echo "-----------------------\n";

#falando
$joao -> falar('Programacao Orientada a Objetos com PHP 8');
$joao -> pararFalar();
echo "-----------------------\n";

#comendo
$joao -> comer('Arroz');
$joao -> comer('Batata Frita');
$joao -> pararComer();

echo "-----------------------\n";
#data de nascimento
echo $joao -> dataNascimento();
?>
