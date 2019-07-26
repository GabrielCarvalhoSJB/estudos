<?php
//While – Esta instrução é usada quando não sabemos quantas vezes um determinado bloco
// de instruções precisa ser repetido. Com ele, a execução das instruções vai continuar até que uma condição seja verdadeira. 
//A condição a ser analisada para a execução do laço de repetição deverá retornar um valor booleano.
//fonte: https://www.devmedia.com.br/while-e-do-while-lacos-de-repeticoes-estrutura-da-linguagem-parte-1/18870
$condicao = true;

while ($condicao){
    $numero = rand(1, 10);
    if ($numero === 3){
        echo 'Três!!!';
        $condicao = false;
    }
    echo $numero . ' ';
}

echo'<br>';

$decimalSalario = 1000;

while ($decimalSalario < 5000 ){
   $decimalSalario *= 100;
   echo 'Meu salario ainda é: '. $decimalSalario;
}
?>