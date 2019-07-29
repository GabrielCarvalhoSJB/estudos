<?php
//Implementando Funções 1
//https://www.youtube.com/watch?v=AQVif1pz9aQ&list=PLesCEcYj003TrV2MvUOnmVtMdgIp0C4Pd&index=95
//PHP Orientado a Objetos - Aula 95 - Implementando Funcionalidades em Classe - eXcript
class Teste{
    public function imprimeTeste(){
        echo "Função imprimeTeste() da classe Teste";
    }
}

$t1 = new Teste();
$t1 -> imprimeTeste();
?>