<?php
class Pessoa{
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123";

    public function verDados(){
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha . '<br>';
    }
}

$objeto = new Pessoa();
$objeto->verDados();

//continuar aula HCODE - Encapsulamento 10:26
?>