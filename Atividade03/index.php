<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade03</title>
</head>
<body>
    <form action="index.php" method="post">
            <pre>
                <label for="">Digite sua Nota!</label>
                <input type="text" name="n1" id="">
                <label for="">Digite sua segunda nota!</label>
                <input type="text" name="n2" id="">
                <label for="">Digite sua terceira nota!</label>
                <input type="text" name="n3" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </pre>

            <?php
     
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $n3 = $_POST["n3"];
                $m = ($n1 + $n2 + $n3)/3;

                echo "<br>";
                echo "A média das suas nota".$n1.", ".$n2.", ".$n3." é de =";
                echo "<br> Média = ".$m;

                if($m>=7){
                    echo"<br> Parabén você foi aprovado!";
                }else{
                    echo"<br> Estude mais!";
                }
            ?>
    </form>
</body>
</html>

