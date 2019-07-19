<?php
//define precisa de 2 parametros;
//Primeiro nome da constante/Segundo valor;
define("SERVIDOR","127.0.0.1");
echo SERVIDOR;

echo'<br>';

echo'No php 7 pode colocar array na constante';

echo'<br>';

define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DE_DADOS);

echo'<br>';
echo 'Versão do PHP com constante: ';
echo PHP_VERSION;
?>