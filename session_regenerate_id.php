<?php
//session_regenerate_id() substituirá o id da sessão atual com um novo id e manterá a informação da sessão atual.
//fonte: https://www.php.net/manual/pt_BR/function.session-regenerate-id.php

require_once("config_session.php");
session_regenerate_id();
echo session_id();

?>