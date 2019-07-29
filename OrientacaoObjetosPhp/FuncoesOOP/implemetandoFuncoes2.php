<?php
    class Pessoa{
        public $idade = 1;

        public function get_idade(){
            return $this -> idade;
        }
    }

    $p1 = new Pessoa();
   echo $p1 -> get_idade();
?>