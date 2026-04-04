<?php
    function converter($c){
        $f = $c *9/5 + 32;
        return $f;   
        }
              
    function exibir($valor,$valor2){
    echo "<h1>O valor " .$valor2. " C° convertido</h1>";
    echo "<h1>  Em Fahrenheit é  " .$valor. " ° F </h1>";
    }
?>