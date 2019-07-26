<?php
$qualsuaIdade = 80;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

//ponto de interrogacao significa o entao do if
//lendo: se $qualsuaIdade menor que $idadeCrianca então
//O senão será os dois pontos.

echo ($qualsuaIdade < $idadeCrianca) ? "Menor de Idade" : "Maior de Idade";
echo ($qualsuaIdade < $idadeMelhor) ? "Menor de Idade" : "Idoso";

?>