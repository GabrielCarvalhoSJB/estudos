<?php
//Aula 98 eXcript
//https://www.youtube.com/watch?v=7XWU_c1tSzk&list=PLesCEcYj003TrV2MvUOnmVtMdgIp0C4Pd&index=99&t=0s
//Construtor para nova instancia criada, é semelhante a uma funcao que nao retorna valores.

class Pessoa{
    public $idade = 0;
    public $nome;

    function __construct()
    {
        echo "<br> Pessoa <br>";
        var_dump($this);
    }
}

$p1 = new Pessoa();
$p2 = new Pessoa();
?>