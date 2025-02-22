<?php

class Produto{
    public $id;
    private $nome;
    private $preco;
    private $estoque = 1;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        if (!is_numeric($preco)){
            echo "Preço inválido! digite um valor numerico!\n";
            return;
        }
        else if ($preco < 0){
            echo "Preço inválido! digite um valor positivo!\n";
            return;
        }
         $this->preco = $preco;
    }


    public function aumentaEstoque($qtd){
        $this->estoque += $qtd;
    }

    public function aumentaPreco($percentual){
        print "preco aumentado em {$percentual}%\n";
        $this->preco += $this->preco * ($percentual / 100);
    }
}
