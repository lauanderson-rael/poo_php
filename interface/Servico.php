<?php
require_once('CarrinhoInterface.php');

class Servico implements CarrinhoInterface {
    private $nome, $valor;

    function __construct(string $nome, float $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->valor;
    }

}
