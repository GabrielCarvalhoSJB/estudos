<?php
$meuArray = array ('Gabriel', 'Carvalho', 'da', 'Silva');
foreach($meuArray as $nome){
    echo($nome.' ');
}

//para saber a posicao coloque o index => 
$meuArray2 = array ('a', 'b', 'c');
foreach($meuArray2 as $letras){
    echo ('<br>' . $letras . ' ');
}

echo'<br>';

$vec = array('uni', 'duni', 'te');
foreach ($vec as $elemento){
    echo $elemento; 
}

echo'<br>';


$arr = array(1, 2, 3, 4);
foreach ($arr as $value){
    echo $value * 2;
}
