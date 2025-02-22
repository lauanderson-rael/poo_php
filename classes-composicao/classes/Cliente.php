<?php
class Cliente{
    private $nome;
    private $enderecos = [];

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco(string $cidade, string $estado){
        $this->enderecos[] = new Endereco($cidade, $estado);
    }

    public function showEnderecos(){
        foreach($this->enderecos as $indice => $valor){
            echo "Endereco: {$indice}: {$valor->getCidadeEstado()}\n";
        }
    }

    public function __destruct()
    {
        echo "Cliente: {$this->nome} foi destruido\n";
    }
}
