<?php
#carrega as classes
include_once 'Pessoa.Class.php';
include_once 'Conta.Class.php';

#criacao do objeto $carlos
$carlos = new Pessoa;
$carlos ->Codigo = 10;
$carlos->Nome = "Carlos Alberto";
$carlos->Altura = 1.85;
$carlos->Idade =  25;
$carlos->Nascimento = '10/09/1991';
$carlos->Escolaridade = "Ensino Médio";
 echo "Manipulando o objeto $carlos->Nome : ".'<br>';
 echo $carlos->Nome . " é formado em : ". $carlos->Escolaridade.'<br>';
 $carlos->Formar('Técnico em Eletrecidade');
 echo $carlos->Nome . " é formado em : ". $carlos->Escolaridade.'<br>';

 echo $carlos->Nome . " possui ". $carlos->Idade . " anos".'<br>';
 $carlos->Envelhecer(1);
 echo $carlos->Nome . " possui " . $carlos->Idade . " anos".'<br>';

 #criacao do objeto $conta_carlos
 $conta_carlos = new Conta;
 $conta_carlos->Agencia = 6677;
 $conta_carlos->Codigo = "CC.123.456.77";
 $conta_carlos->DataDeCriacao = "10/01/1991";
 $conta_carlos->Titular = $carlos;
 $conta_carlos->Senha = 9877;
 $conta_carlos->Saldo = 587.00;
 $conta_carlos->Cancelada = false;

 echo '<br>';
 echo "Manipulando a conta de " . $conta_carlos->Titular->Nome . '<br>';
 echo "O saldo atual é R$ " . $conta_carlos->ObterSaldo() . '<br>';

 $conta_carlos->Retirar(20);
 echo "O saldo atual é R$ " . $conta_carlos->ObterSaldo() . '<br>';
 
 $conta_carlos->Depositar(30);
 echo "O saldo depois do depósito de 20 reais: R$ " . $conta_carlos->ObterSaldo() . '<br>';

?>