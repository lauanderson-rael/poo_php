<?php
declare (strict_types=1);
require_once('./classes/Veiculo.php');
require_once('./classes/Carro.php');
require_once('./classes/Bicicleta.php');

$c1 = new Carro('Ford', 'Fiesta', 5, 4);
echo "O veiculo: {$c1->getNome()} - {$c1->getModelo()}, suporta {$c1->getQtdPassageiros()} passageiros\n";
echo "O carro tem {$c1->getPortas()} portas\n";
$c1->acelerar();
echo "-----------------------\n";

$b1 = new Bicicleta('Bicicleta', 'Caloi', 1);
echo "O veiculo: {$b1->getNome()} - {$b1->getModelo()}, suporta {$b1->getQtdPassageiros()} passageiros\n";
$b1->pedalar();
