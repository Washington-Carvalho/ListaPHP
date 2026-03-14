<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade02</title>
</head>
<body>
    <form action="index.php" method="post">
            <pre>
                <label for="">Digite um numero!</label>
                <input type="text" name="n1" id="">
                <label for="">Digite um segundo numero!</label>
                <input type="text" name="n2" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </pre>

            <?php
     
             $n1 = $_POST["n1"];
             $n2 = $_POST["n2"];
             $r = $n1 + $n2;

                echo "<br>";
                echo"A soma de ".$n1. " + " .$n2."= " .$r;
            ?>
    </form>
</body>
</html>

