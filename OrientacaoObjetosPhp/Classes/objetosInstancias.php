<?php
//Aula Criação de Objetos/Instâncias da EXCRIPT 
//https://www.youtube.com/watch?v=2pB2MZrD6LA&feature=youtu.be

class Classe{
    public $a = 1;
    public $b = 2;
    public $c = 3;
}

$objetoA = new Classe();
$objetoB = new Classe();
$objetoC = new Classe();

var_dump($objetoA);
var_dump($objetoB);
var_dump($objetoC);

//removendo objeto da memória
unset($objetoA);
var_dump($objetoA);

?>