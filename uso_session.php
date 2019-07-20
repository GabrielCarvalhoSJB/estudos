<?php
require_once("config_session.php");
//apagar uma variavel session
//session_unset($_SESSION["nome"]);
//remove o usuario como se tivesse um novo acesso session_destroy
//session_destroy();
echo $_SESSION["nome"];
?>