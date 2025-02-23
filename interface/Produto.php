<?php
require_once('CarrinhoInterface.php');

class Produto implements CarrinhoInterface{
    private $nome, $preco;

    function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }

}
