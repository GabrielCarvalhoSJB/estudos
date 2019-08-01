<?php
abstract class Animal{
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}
//mudou o comportamento da classe isso é o polimorfismo
class Cachorro extends Animal{
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal{
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar()
    {
        return "Canta";
    }
//faz o polimorfismo e chama o metodo mover pai sem alterar usando o parent
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
$tom = new Gato();
$piupiu = new Passaro();
echo $pluto->falar();
echo "<br> {$pluto->mover()}";
echo "<br> {$tom->falar()}";
echo "<br> {$tom->mover()}";
echo "<br> {$piupiu->falar()}";
echo "<br> {$piupiu->mover()}";


?>