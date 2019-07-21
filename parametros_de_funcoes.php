<?php
function ola($texto = "mundo", $periodo = "Bom dia"){
    return "Olá $texto!! $periodo <br>";
}
echo ola();
echo ola("Gabriel");
echo ola("parametros","Boa Noite");
?>