<?php
$a = 10;
function trocaValor($b){
    $b += 50;
    return  $b;
}
echo trocaValor($a);
echo'<br>';
echo $a;
echo'<br>';

//Você pode passar uma variável por referência a uma função de forma que a função possa modificar a variável.
//para isso apenas coloque & na frente da variavel.
function trocaValorReferencia(&$b){
    $b += 50;
    return  $b;
}
echo trocaValorReferencia($a);
echo'<br>';
echo $a;
?>