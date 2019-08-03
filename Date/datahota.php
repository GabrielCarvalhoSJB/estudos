<html>

<head>
    <title>Data e Hora</title>

<body>
    <table>
        <tr>
            <td>
                <?php
                $tempo = time();
                date_default_timezone_set('America/Sao_Paulo');
                echo "<b>Data</b><br>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo "<b>Dia da Semana: </b>" . date("l", $tempo) . "<br>";
                ?>
            </td>
        </tr>
    </table>
</body>
</head>

</html>