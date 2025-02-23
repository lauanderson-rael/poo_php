<?php
interface MinhaInterface{
    public const CONSTANTE = 1;
    public function metodo1();
    public function metodo2();
}

interface MinhaInterface2{
    public function metodo3();
    public function metodo4();
}

# ClasseTetste implementa as 2 interfaces (criando os metodos dos contratos)
class ClasseTeste implements MinhaInterface, MinhaInterface2{
    public function metodo1(){
        echo "metodo 1\n";
    }
    public function metodo2(){
        echo "metodo 2\n";
    }
    public function metodo3(){
        echo "metodo 3\n";
    }
    public function metodo4(){
        echo "metodo 4\n";
    }
}
