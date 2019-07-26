<?php
$dt = new DateTime();
echo $dt -> format("d/m/Y H:i:s");
echo '<br>';
//Representa um intervalo entre datas.P=periodo 15D D=dias
$periodo = new DateInterval("P15D");
$dt -> add($periodo);
echo $dt -> format("d/m/Y H:i:s");

?>