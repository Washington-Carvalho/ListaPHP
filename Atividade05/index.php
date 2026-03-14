<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade05</title>
</head>
<body>
    <form action="index.php" method="post">
            <pre>
                <label for="">Digite um numero</label>
                <input type="text" name="n1" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </pre>

            <?php
     
                $n1 = $_POST["n1"];
                $d = $n1 * 2;

                echo "<br>";
                echo "O dobro de " .$n1. " é " .$d;
            ?>
    </form>
</body>
</html>

