<?php
if ($_REQUEST["action"] == "sent") {
    session_start();
    $_SESSION["usuario"] = $_POST["campo_usuario"];
    echo '<a href="exemplo_session2.php">Outro arquivo</a>';
} else {
    ?>
    <form action="exemplo_session.php?action=sent" method="POST">
        Digite o seu nome:
        <input type="text" name="campo_usuario">
        <input type="submit" value="Enviar">
    </form>
<?php
}
?>