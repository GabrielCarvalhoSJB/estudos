<?php
class Produto{
    var $Codigo;
    var $Preco;
    var $Descricao;
    var $Quantidade;

function ImprimiEtiqueta(){
    echo 'Codigo: ' .$this->Codigo. '<br>';
    echo 'Descricao: '.$this->Descricao. '<br>';
}

}
?>