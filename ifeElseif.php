<?php
$qualsuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualsuaIdade < $idadeCrianca) {
    echo "Idade de criança";
} else if ($qualsuaIdade < $idadeMaior){
    echo "É um adolescente";
} else if ($qualsuaIdade < $idadeMelhor){
    echo "É adulto";
} else{
    echo "É um idoso";
}

//Sintaxe do comando if
/* if(condicao){
     Código a ser executado; 
} else if(condicao){
     Código a ser executado; 
} else {
     Código a ser executado; 
} */