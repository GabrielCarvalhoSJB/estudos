<?php
//sizeof e count é a mesma função
$meuArray = array('a','b','c','d','e');
echo 'Valor de elementos com count: ';
echo (count($meuArray).'<br>');

echo 'Removendo com unset: ';
unset($meuArray[0]);
echo (sizeof($meuArray));

?>