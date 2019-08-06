<?php
$conn= new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,desenha) VALUES (:LOGIN,:PASSWORD)");
$login = "Gabriel";
$password = "123456";

$login = "JR";
$password = "12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
echo "Inserido com sucesso";

?>