<?php
class Pessoa{

public $nome;//atributo

public function falar(){//método
return "O meu nome é " . $this->nome;
}
}

$gabriel = new Pessoa();
$gabriel->nome = "Gabriel Carvalho";
echo $gabriel->falar();
?>