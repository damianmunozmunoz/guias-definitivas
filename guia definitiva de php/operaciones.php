<?php
$num1 = 5; // Asigna el valor 45 a la variable num1.
$num2 = 2; // Asigna el valor 2 a la variable num2.

$suma = $num1 + $num2; // Suma el valor de la variable num1 al de num2.
print($suma."\n"); // Imprime en la consola el valor de la variable suma y salto de línea.
print($num1 + $num2."\n"); // Nos ahorramos el uso de la variable suma y salto de línea.
print("El resultado de la suma del número ".$num1." y el del número ".$num2." es ".$suma); // Imprime el texto en la pantalla y salto de línea.

$resta = $num1 - $num2; // Resta el valor de la variable num2 al de num1.
print($resta."\n"); // Imprime en la consola el valor de la variable resta y salto de línea.

$producto = $num1 * $num2; // Multiplica el valor de la variable num1 por el de num2.
print($producto."\n"); // Imprime en la consola el valor de la variable producto y salto de línea.

$potencia = $num1 ** $num2; // Eleva el valor de la variable num1 a la potencia num2.
print($potencia."\n"); // Imprime en la consola el valor de la variable potencia y salto de línea.

$division = $num1 / $num2; // Divide el valor de la variable num1 entre el de num2 (devuelve un número real).
print($division."\n"); // Imprime en la consola el valor de la variable division y salto de línea.

// PHP no dispone de ningún operador para realizar una division entera, por lo que se debe usar una función.
$cociente = floor($num1 / $num2); // Divide el valor de la variable num1 entre el de num2 obteniendo solo el cociente redondeando hacia abajo.
print($cociente."\n"); // Imprime en la consola el valor de la variable cociente y salto de línea.

$resto = $num1 % $num2; // Divide el valor de la variable num1 entre el de num2 obteniendo solo el resto.
print($resto."\n"); // Imprime en la consola el valor de la variable resto y salto de línea.