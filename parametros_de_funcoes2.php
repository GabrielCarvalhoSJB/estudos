<?php
function ola(){
    $argunmentos = func_get_args();//essa funcao faz recupera o valor e coloca tudo dentro de um array
    return $argunmentos;
}
var_dump(ola("Bom dia",10));
?>