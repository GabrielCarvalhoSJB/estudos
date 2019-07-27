<?php
class Pessoa{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;
    
    /* método Crescer
    aumenta a altura em $centimetros */

    function Crescer($centimetros){
        if($centimetros > 0){
            $this->Altura += $centimetros;
        }
    }

    /* método Formar
    altera a Escolaridade para $titulacao */

    function Formar($titulacao){
        $this->Escolaridade = $titulacao;
    }

    /* método Envelhecer
    aumenta a Idade em $anos */

    function Envelhecer($anos){
        if($anos > 0){
            $this->Idade +=$anos;
        }
    }

}
?>