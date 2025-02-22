<?php

class CarrinhoCompras{
    private $produtos = [];

    public function addproduto(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function getprodutos(){
        return $this->produtos;
    }
}
