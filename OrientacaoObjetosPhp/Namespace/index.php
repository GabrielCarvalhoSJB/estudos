<?php
require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome(" Gabriel");
$cad->setEmail("gabriel@com.br");
$cad->setSenha("123");

$cad->registrarVenda();

?>