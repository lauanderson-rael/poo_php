<?php
class ContaPoupana extends Conta{

    public function sacar(float $valor): void{
        if ($this->saldo < $valor) {
            echo "Saldo insuficiente\n";
            $this->detalhes();
            return;
        }

        $this->saldo -= $valor;
        echo "Saque CP no valor de {$valor} realizado com sucesso\n";
        $this->detalhes();


    }

}
