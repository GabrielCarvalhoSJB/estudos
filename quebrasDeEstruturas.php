<?php
//Quebras de estruturas: break
//O comando break tem como função quebrar a continuidade.
//Neste exemplo o laço for determinaria 10 interações, no entanto é interrompido
//na 5° interação

for ($a=1; $a <= 10; $a++){
    echo $a . '<br>';
    if ($a == 5) break;
}

echo 'OUTRO EXEMPLO DE QUEBRA DE ESTRUTURAS'. '<br>'.'<br>'.'<br>';

for ($b = 1; $b <=10; $b++)
    for ($c = 1; $c <= 10; $c++){
        echo 'b'.$b;
        echo 'c'.$c.' ';
        if ($b==5 and $c ==5) break 2;
        if ($c > 7 ){
            echo '<br>';break;
        }
}
?>