<?php
//mudando a linguagem do servidor para as datas.
setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");
echo ucwords (strftime("%A %B"));
?>