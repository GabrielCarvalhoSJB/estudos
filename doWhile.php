<?php
//Do/While – O do/while tem quase o mesmo
// funcionamento que o while, a diferença é que com o uso dele teremos os 
//comandos executados ao menos uma única vez.
//fonte: https://www.devmedia.com.br/while-e-do-while-lacos-de-repeticoes-estrutura-da-linguagem-parte-1/18870
$total = 50;
$desconto = 0.9;

do{
    $total *= $desconto;
}while ($total > 100);
echo $total;

echo '<br>';

$a = 5;
do{
echo $a;
}while ($a < 4);//Observação: Cuidado para loop infinito, se a condição fosse $a > 4 entraria em loop Infinito.

echo '<br>';

$aumento = 250;

do{
    echo $aumento.'<br>';
    $aumento += 50;
}while ($aumento < 500 );
