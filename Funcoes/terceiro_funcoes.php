<?php
//nova funcao do php 7 transformar todos valores em inteiro
function soma(int ...$valores){
return array_sum($valores);

}
echo soma(2, 2);
echo'<br>';
echo soma(4.8, 2);
echo'<br>';
echo soma(2.5, 5.9);
echo'<br>';
