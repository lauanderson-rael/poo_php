<?php
class Escritor{
    private $nome;
    private $caneta;

    public function __construct(){
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCaneta(Caneta $caneta){
        $this->caneta = $caneta;
    }

    public function getCaneta(){
        return $this->caneta;
    }
}
