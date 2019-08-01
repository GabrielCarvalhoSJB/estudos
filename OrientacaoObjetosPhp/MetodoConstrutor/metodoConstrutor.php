<?php
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    
    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    //convertendo em string
    public function __toString()
    {
        return '<br>'. $this->logradouro.",".$this->numero.",".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Tal", 123, "SJB");
var_dump($meuEndereco); 
echo $meuEndereco;

?>