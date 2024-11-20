<?php
    for($i=1; $i<=10; $i+=2){
        echo "Valor de la variable ".$i."<br>";
    }
    for($j=1; $j<=10; $j++){
        for($k=0; $k<5; $k++){
            echo "Valor de la segunda variable".$j.
            " y valor de la tercera variable ".$k."<br>";
        }
    }
?>