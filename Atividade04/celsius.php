
            <?php
     
                $c = $_POST["celsius"];
                $f = $c *9/5 + 32;

                echo "<br>";
                echo "A temperatura digitada em C° " .$c;
                echo "<br>";
                echo "Em Fahrenheit são = " .$f. " ° F";
            ?>