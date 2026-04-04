<?php
    function converter($c){
        $f = $c *9/5 + 32;
        return $f;   
        }
              
    function exibir($valor){
    echo "<br>";
    echo "<h1> O valor em Fahrenheit é  " .$valor. " ° F </h1>";
    }
?>