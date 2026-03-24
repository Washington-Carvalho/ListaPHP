<?php
    function converter($c){
        $f = $c *9/5 + 32;
        return $f;
        exibir($f);   
        }
              
    function exibir($c,$f){
    echo "<br>";
    echo "<h1>A temperatura digitada em C° " .$c."</h1>";
    echo "<br>";
    echo "<h1>Em Fahrenheit são = " .$f. " ° F </h1>";
    }
?>