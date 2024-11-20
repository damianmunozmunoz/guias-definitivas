<html>
    <head>
        <title>Tabla condicional</title>
    </head>
    <body>
        <h1>Tabla condicional</h1>
        <?php
            //Con la palabra function podemos crear una función de la siguiente manera
            function muestra($valor){
                /*Esta función comprueba si un valor es mayor o menor que 0.5
                y lo imprime en un color u otro*/
                if($valor < 0.5){
                    $color = "red";
                }else{
                    $color = "blue";
                }
                echo "<td><font color='$color'>$valor</font></td>\n";
            }

            function duplicaNumero($num){
                /*Algunas funciones pueden retornar un valor
                con la palabra return*/
                $num*=2;
                return $num;
            }
        ?>
        <table border="1">
            <?
                for($x=0; $x<=2; $x+=0.01){
                    echo "<tr>";
                    muestra($x);
                    muestra(sin($x));
                    muestra(cos($x));
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>