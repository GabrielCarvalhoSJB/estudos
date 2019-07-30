<?php
    class Pessoa{
        public $idade = 0;
//get = obter, pegar
        public function get_idade(){
            return $this -> idade;
        }
//set = setar, definir, atribuir a
        public function set_idade($idade){
            if($idade > 0){
                $this->idade = $idade;
            }else{
                echo "A idade informada é inválida".'<br>';
            }
        }
    }

    $p1 = new Pessoa();
    $p1->set_idade(0);
    echo "A idade é: {$p1->get_idade()}";
?>