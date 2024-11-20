<?php
$a = 2; // Asigna el valor 2 a la variable a.
$b = 3; // Asigna el valor 3 a la variable b.

$condicion = $a == $b; // Evaluación de una condición. Resultado "0 en binario (carácter en blanco)" o "false" si $a es igual a $b después de la manipulación de tipos.
print($condicion."\n"); // Imprime en la consola el resultado de la evaluación de la condición anterior y salto de línea.
print(gettype($condicion)."\n"); // Imprime en la consola el tipo de variable que es condicion y salto de línea.

$condicion = $a != $b; // Evaluación de una condición. Resultado "1 en binario" o "true" si $a es distinto a $b después de la manipulación de tipos.
print($condicion."\n"); // Imprime en la consola el resultado de la evaluación de la condición anterior y salto de línea.

$condicion = $a > $b; // Evaluación de una condición. Resultado "0 en binario (carácter en blanco)" o "false" si $a es mayor que $b después de la manipulación de tipos.
print($condicion."\n"); // Imprime en la consola el resultado de la evaluación de la condición anterior y salto de línea.

$condicion = $a < $b; // Evaluación de una condición. Resultado "1 en binario" o "true" si $a es menor que $b después de la manipulación de tipos.
print($condicion."\n"); // Imprime en la consola el resultado de la evaluación de la condición anterior y salto de línea.