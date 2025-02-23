<?php
class Veiculo{
    protected $nome;
    protected $modelo;
    protected $qtdPassageiros;

    function __construct($nome, $modelo, $qtdPassageiros){
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->qtdPassageiros = $qtdPassageiros;
    }

    public function getNome ():string {
        return $this->nome;
    }

    public function getModelo (): string{
        return $this->modelo;
    }

    public function getQtdPassageiros(): int{
        return $this->qtdPassageiros;
    }

}
?>
