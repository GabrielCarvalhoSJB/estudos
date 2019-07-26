<?php
$pessoa = array(
'nome' => 'Gabriel',
'idade' => 27
);
foreach ($pessoa as &$pessoas){
    if(gettype($pessoas) === 'integer') $pessoas +=10;
    echo $pessoas. '<br>';
}
print_r($pessoa);
?>