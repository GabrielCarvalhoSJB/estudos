<?php

class Data{
    var $dia;
    var $mes;
    var $ano;

    function confdados($d, $m, $a){
        $this->dia = $d;
        $this->mes = $m;
        $this->ano =$a;
    }
    function pegadadados(&$d, &$m, &$a){
        $d=$this->dia;
        $m=$this->mes;
        $a=$this->ano;
    }
    function anobi(){
        $ano = $this->ano;
        if($ano % 4 <>0){
        $anobissexto = false;
        }else{
            if($ano % 100 <>0){
            $anobissexto = true;
        }elseif($ano % 400<>0) {
          
            $anobissexto = false;
            
        }else{
            $anobissexto = true;
            return $anobissexto;
        }
    }   
  }
}
$teste = new Data();
echo $teste-> anobi();
?>