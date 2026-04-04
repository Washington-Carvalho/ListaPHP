<?php
include "function.php";
$c = $_POST["celsius"];

exibir(converter($c));
?>
<br>
<a href="index.php"> Novo Calculo</a>