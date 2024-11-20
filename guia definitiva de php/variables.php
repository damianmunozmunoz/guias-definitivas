<?php
    function duplicaNumero($num){
        /*Las variables globales viven fuera de la función como podemos ver
        en el siguiente ejemplo*/
        global $numero;
        /*Sin embargo, las variables normales dentro de una función solo
        viven dentro de la propia función*/
        $doble = $num * 2;
        echo "El doble de $num es $doble <br>";
        echo "La variable \$numero dentro de la función vale $numero y es del tipo " . gettype($numero) . "<br>";
    }

    $numero = 5;
    echo "La variable \$numero fuera de la función vale $numero y es del tipo " . gettype($numero) . "<br>";
    duplicaNumero($numero);
    echo "La variable \$doble vale $doble y es del tipo " . gettype($doble);


    function variablesNoEstaticas(){
        $var = 0;

        $var += 2;
        echo "La variable \$var tiene inicialmente el valor $var<br>";

        $var *= 3;
        echo "La variable \$var al triplicarla tiene el valor $var<br>";
    }
    
    //Cada vez que inicialicemos la función nos devolverá siempre 6
    echo "Primera llamada a la función<br>";
    variablesNoEstaticas();

    echo "Segunda llamada a la función<br>";
    variablesNoEstaticas();

    function variablesEstaticas(){
        //Esto permite que la variable se guarde dentro de la función para ejecutarla varias veces
        static $var;
        
        $var += 2;
        echo "La variable \$var tiene inicialmente el valor $var<br>";

        $var *= 3;
        echo "La variable \$var al triplicarla tiene el valor $var<br>";
    }

    //Cada vez que inicialicemos la función se ejecutará la función otra vez sobre esa variable
    echo "Primera llamada a la función<br>";
    variablesEstaticas();

    echo "Segunda llamada a la función<br>";
    variablesEstaticas();