<?php
class Pessoa
{
    public $nome;
    public $idade;
    private $falando = false;
    private $comendo = false;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos.\n";
    }

    public function falar($assunto)
    {
        if ($this->falando)
        {
            echo "{$this->nome} ja esta falando!\n";
            return;
        }
        $this->falando = true;
        echo "{$this->nome} esta falando sobre '{$assunto}' \n";
    }

    public function pararFalar()
    {
        if (!$this->falando)
        {
            echo "{$this->nome} nao esta falando!\n";
            return;
        }
        $this->falando = false;
        echo "{$this->nome} parou de falar.\n";
    }

    public function comer($alimento){
        if ($this->comendo)
        {
            echo "{$this->nome} ja esta comendo!\n";
            return;
        }
        $this->comendo = true;
        echo "{$this->nome} esta comendo '{$alimento}'\n";
    }

    public function pararComer(){
        if (!$this->comendo)
        {
            echo "{$this->nome} nao esta comendo!\n";
            return;
        }
        $this->comendo = false;
        echo "{$this->nome} parou de comer.\n";
    }

    public function dataNascimento()
    {
        return "idade: " . date('Y') - $this->idade;
    }
}
