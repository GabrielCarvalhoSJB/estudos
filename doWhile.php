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

?>