<?php
//Aula Acessando membros de classe da EXCRIPT 
//https://www.youtube.com/watch?v=VOmizEkC4Mg&list=PLesCEcYj003TrV2MvUOnmVtMdgIp0C4Pd&index=94

class Pessoa{
    public $idade = 0;
}

$p1 = new Pessoa();
$p1 -> idade;

$p2 = new Pessoa();
$p2 -> idade = 30;

echo $p1 -> idade;
echo '<br>';
echo $p2 -> idade;
?>