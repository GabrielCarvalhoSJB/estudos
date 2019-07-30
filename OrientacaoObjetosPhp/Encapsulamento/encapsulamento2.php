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
//classe programador vai estender tudo de pessoa menos o privado
class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this).'<br>';//metodo mostrar o nome da classe
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha . '<br>';//não vai aparecer porque esta private
    }
}

$objeto = new Programador();
$objeto->verDados();


?>