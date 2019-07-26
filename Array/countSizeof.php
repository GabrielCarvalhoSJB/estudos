<?php 
//Count e Sizeof
//É possivel obter números de elementos exitentes em array por meio de count e sizeof

$meuArray = array('a','b','c');
echo (count($meuArray).'<br>');

unset($meuArray[0]);
echo (sizeof($meuArray).'<br>');

?>