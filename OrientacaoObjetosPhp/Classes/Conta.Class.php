<?php
class Conta{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    /* método Retirar
    diminui o Saldo em $quantia */

    function Retirar($quantia){
        if ($quantia > 0){
            $this->Saldo -= $quantia;
        }
    }

    /* método Depositar
    aumenta o Saldo em $quantia */

    function Depositar($quantia){
        if ($quantia > 0){
            $this->Saldo += $quantia;
        }
    }

     /* método Obter
    retorna o Saldo Atual */

    function ObterSaldo(){
        return $this->Saldo;
    }
//CONTINUAR NA PAGINA 94




}
?>