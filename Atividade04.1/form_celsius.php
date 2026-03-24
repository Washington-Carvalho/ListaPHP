   <form action="form_celsius.php" method="post">
    <pre>
    <label for="">Digite a temperatura em Celsius!</label>
    <input type="text" name="celsius" id="">
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">
    </pre>
 </form>
<?php include 'function.php';


    $c = $_POST['celsius'];

    $f = converter($c);

    exibir($c,$f);
?>
<br>
<a href="index.php">Retornar</a>