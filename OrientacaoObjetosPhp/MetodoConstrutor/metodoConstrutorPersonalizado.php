<?php
//Metodos construtor personalizado
//Aula 99 eXcript
//https://www.youtube.com/watch?v=EBrWKQ3RSog&list=PLesCEcYj003TrV2MvUOnmVtMdgIp0C4Pd&index=99
class A{

}
class Pessoa{
    public $a;

    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this-> a = new A();
        $this-> nome = $nome;
        $this-> idade = $idade;
    }
}

$p1 = new Pessoa("Gabriel",27);
var_dump($p1);
?>