<?php
//Escreva um programa que informe a categoria de um jogador
//considerando sua idade infantil(13anos), juvenil (até 17anos) ou senior(acima de 17anos)

$jogadorIdade = 14;

switch ($jogadorIdade) {
    case ($jogadorIdade <= 13):
        echo 'Categoria Infantil';
        break;
    case ($jogadorIdade <= 17):
        echo 'Categoria Juvenil';
        break;
    case ($jogadorIdade > 17):
        echo 'Categoria Sênior';
        break;
}
