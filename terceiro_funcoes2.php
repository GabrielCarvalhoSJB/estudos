<?php
//nova funcao do php 7 transformar todos valores em inteiro, agora com 2 pontos o tipo que é para
//retornar, conversao do tipo no retorno
function soma(float ...$valores):float {
return array_sum($valores);

}
echo var_dump(soma(2.1,3));
echo soma(2, 2);
echo'<br>';
echo soma(4.8, 2);
echo'<br>';
echo soma(2.5, 5.8);
echo'<br>';
?>