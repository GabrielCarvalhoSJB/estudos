<?php
//Segundo exemplo JsonDecode

$json = '[{"nome":"Gabriel","idade":27},{"nome":"Gabriel Jr","idade":4}]';

$data = json_decode($json,true);//colocar true senao viram objetos.
var_dump($data);
?>
