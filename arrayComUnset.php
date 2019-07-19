<?php
//Primeira regra todo array inicia com 0;
//Segunda regra quando um array tem apenas uma dimensão é chamado de vetor
$frutas = array("laranja", "abacaxi", "melancia");
print_r($frutas);

echo'<br>';

$pessoas = array();
//array+push insere na variavel do array
array_push($pessoas, array(
    'nome' => 'Gabriel',
    'idade' => 27
));

array_push($pessoas, array(
    'nome' => 'Gabriel Jr',
    'idade' => 4
));
print_r($pessoas);

echo'Removendo array posicao 0, de pessoas';
//unset remove da variavel do array
unset($pessoas[0]);
print_r($pessoas);
?>