<?php
//Escreva um programa que controle senha que de 3 chances de acerto,
//Se ele nao conseguir deve avisar que o cartao foi bloqueado.
$tentativa = 3;
$cartao = 123;
if($cartao == 123){
    echo 'Senha correta';
}else{
    for($tentativa; $tentativa <= 3 ; $tentativa++){
        switch ($tentativa) {
            case ($tentativa == 1):
                echo '1 Tentativa';
               return;
            
                case '2':
                echo '2 Tentativa';
                return;
            
                case '3':
                echo 'Bloqueado';
                break;
        }
    }
}
