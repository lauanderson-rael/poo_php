<?php

abstract class Conta {
    protected $agencia, $conta, $saldo;

    function __construct(string $agencia, int $conta, float $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function detalhes(): void{
        echo "agencia: {$this->agencia} -- ";
        echo "conta: {$this->conta} -- ";
        echo "saldo: {$this->saldo} \n";
    }

    public function depositar(float $valor): void{
        $this->saldo += $valor;
        $this->detalhes();
    }

    abstract public function sacar(float $valor): void;
}
