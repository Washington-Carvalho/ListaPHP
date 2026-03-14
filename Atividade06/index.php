<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade06</title>
</head>
<body>
    <form action="index.php" method="post">
            <pre>
                <label for="">Digite um valor US$:</label>
                <input type="text" name="dolar" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </pre>

            <?php
     
                $n1 = $_POST["dolar"];
                $r = $n1 * 5.17; 

                echo "<br>";
                echo "O Valor de USD $ " .$n1. "<br> Em Reais é R$" .$r;
            ?>
    </form>
</body>
</html>

