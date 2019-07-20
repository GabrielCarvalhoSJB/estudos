<?php
if ($_REQUEST["action"] == "login") {
    if ($_POST["campo_usuario"] == "Gabriel" && $_POST["campo_senha"] == "abc123") {
        session_start();
        $_SESSION["usuario"] = $_POST["campo_usuario"];
        $_SESSION["autenticado"] = TRUE;
        header("Location: funcionou_session.php");
    } else {
        echo "Seu nome de usuário ou senha esta incorretos";
    }
} else {
    ?>
    <form action="sessionLogin.php?action=login" method="POST">
        Digite seu nome:
        <input type="text" name="campo_usuario">
        <br>
        Digite sua senha:
        <input type="password" name=campo_senha>
        <br>
        <input type="submit" value="Autenticar">
    </form>
<?php
}
?>