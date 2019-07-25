<?php
class Usuario{
public $nome;
public $cpf;
public $endereco;
//construtor da classe
function Usuario(){
    $this->preparaUsuario();
}
private function preparaUsuario(){
    $this->nome = "Gabriel";
    $this->cpf = "398.098.888-2";
    $this->endereco = "Rua Fulano de Tal";
}
public function getCpf(){
    return $this->cpf;
}
public function getNome(){
    return $this->nome;
}
function getEndereco(){
    return $this->endereco;
}
}
?>