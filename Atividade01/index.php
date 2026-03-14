<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade01</title>
</head>
<body>
    <form action="index.php" method="post">
            <pre>
                <label for="">Digite seu nome!</label>
                <input type="text" name="nome" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </pre>

            <?php
                $nome = "";
     
                $nome = $_POST["nome"];

                echo "<br>";
                echo"Olá, ".$nome." Boa noite!";
            ?>
    </form>
</body>
</html>

