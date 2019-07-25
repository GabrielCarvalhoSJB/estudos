<?php
require_once 'oopLivro.php';

//cria objeto
$produto1 = new Produto;
$produto2 = new Produto;

//atribuir valores
$produto1->Codigo = 4001;
$produto1->Descricao = "Cd Musicas";

$produto2->Codigo = 4001;
$produto2->Descricao = "Cd Musicas";

$produto1->ImprimiEtiqueta();
$produto2->ImprimiEtiqueta();
?>