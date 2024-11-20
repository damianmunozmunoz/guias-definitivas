<?php
/*Sirven para tratar datos gestionados entre un cliente y un servidor*/
/*En $_POST[' '] guardamos los valores de los inputs enviados en el formulario
por lo que escribiremos la opción del select*/
$sector = $_POST['sector'];
$sectors = array("Electricista","Obrero","Fontanero","Carpintero","Transportista");

echo "La opción elegida es: $sector<br>";
echo "La profesión correspondiente es: $sectors[$sector].";

$name = $_POST['name'];
$children = $_POST['children'];
$years = $_POST['years'];
$hiddenElement = $_POST['hiddenElement'];

echo "El nombre seleccionado es $name<br>";
echo "La selección de hijos es: $children<br>";
echo "La edad de los hijos es: $years<br>";
echo "Elemento oculto: $hiddenElement<br>";