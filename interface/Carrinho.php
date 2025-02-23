<?php
require_once('CarrinhoInterface.php');

class Carrinho{
    private $produtos = [];

            # insere classe que implementa CarrinhoInterface
    public function insere (CarrinhoInterface $produto): void{
        $this->produtos[] = $produto;
    }

    public function total (): float {
        $total = 0;
        foreach($this->produtos as $produto){
            $total += $produto->getPreco();
        }

        return $total;
    }
}
