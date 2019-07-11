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

?>