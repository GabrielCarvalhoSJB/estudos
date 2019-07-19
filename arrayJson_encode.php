<?php
//primeiro exemplo json_encode
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Gabriel',
    'idade' => 27
));

array_push($pessoas, array(
    'nome' => 'Gabriel Jr',
    'idade' => 4
));
echo json_encode($pessoas);
?>
