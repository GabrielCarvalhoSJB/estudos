<?php
//Resolva seguinte problema: uma copia de xerox custa 0,25
//acima de 100 folhas esse valor vai para 0,20
//informe o valor a ser pago.
$xerox = 0.25;
$variosXerox = 0.20;
$opcaoXerox = 101;
if ($opcaoXerox > 100 ){
    echo $opcaoXerox * $variosXerox .' '. 'Valor abaixo de 100 folhas';
}else {
    echo $opcaoXerox * $xerox .' '. 'Valor abaixo de 100 folhas';
}
?>