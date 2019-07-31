<?php
interface Oficina{
    public function modelo($modelo);
    public function ano($ano);
    public function defeito($defeito);
    public function preco($manutencao);
}

abstract class Mecanico implements Oficina{
    public function modelo($modelo)
    {
        echo "O modelo do carro é {$modelo}. <br>";
    }

    public function ano($ano)
    {
        echo "O ano do carro é {$ano}. <br>";
    }

    public function defeito($defeito)
    {
        echo "O defeito do carro é {$defeito}. <br>";
    }

    public function preco($manutencao)
    {
        echo "O valor da manutenção é {$manutencao}. <br>";
    }
}

class Relatorio extends Mecanico{

}

$relatorio1 = new Relatorio();
$relatorio1->modelo("Opala");
$relatorio1->ano(1980);
$relatorio1->defeito("quebrou a roda");
$relatorio1->preco("100,00");
?>