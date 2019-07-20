<?php
//session_id() é usado para obter ou definir o id de sessão para a sessão atual.
//fonte: https://www.php.net/manual/pt_BR/function.session-id.php
require_once("config_session.php");
echo session_id();
?>