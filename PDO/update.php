<?php
$conn= new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, desenha = :PASSWORD  WHERE idusuario = :ID");
$login = "Gabriel";
$password = "123456789";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "Alterado com sucesso";

?>