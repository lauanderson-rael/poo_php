<?php

class Carro extends Veiculo{
    private $portas;

    function __construct(string $nome, string $modelo, int $qtdPassageiros, int $portas){
        parent::__construct($nome, $modelo, $qtdPassageiros);
        $this->portas = $portas;
    }

    public function getPortas(){
        return $this->portas;
    }

    public function acelerar(){
        echo "O carro esta acelerando\n";
    }
}
