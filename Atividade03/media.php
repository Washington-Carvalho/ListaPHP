            <?php
     
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $n3 = $_POST["n3"];
                $m = ($n1 + $n2 + $n3)/3;

                echo "<br>";
                echo "A média das suas nota".$n1.", ".$n2.", ".$n3." é de =";
                echo "<br> Média = ".$m;

                if($m>=7){
                    echo"<br> Parabéns você foi aprovado!";
                }else{
                    echo"<br> Estude mais!";
                }
            ?>