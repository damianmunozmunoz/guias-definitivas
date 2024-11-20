<?php
//php incluye algunas funciones integradas que nos pueden ayudar
$texto = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam nulla quis consectetur asperiores cumque harum, neque quam, quidem esse sunt molestiae cupiditate rem officia ipsam? Fugiat sed dolore atque quaerat';
//explode() divide un string en varios strings según un carácter y devuelve un array
$textoexplode = explode('o', $texto);
foreach ($textoexplode as $pos => $palabra) {
    echo $palabra . ' ';
}

//implode() une un array y devuelve un string (lo contrario que explode)
$textoimplode = implode('r', $textoexplode);
echo '<br><br>' . $textoimplode;

//intval() convierte un string a un entero
$textonum = "3";
echo "La variable \$textonum tiene el valor $textonum y es de tipo " . gettype($textonum) . "<br>";
$textoint = intval($textonum);
echo "La variable \$textoint tiene el valor $textoint y es de tipo " . gettype($textoint) . "<br>";

//floatval() convierte un string a un flotante
$textofloat = floatval($textonum);
echo "La variable \$textofloat tiene el valor $textofloat y es de tipo " . gettype($textofloat) . "<br>";

//strpos() devuelve la posición de la primera ocurrencia de un substring en un string
$textostrpos = strpos($texto,"it");
echo $textostrpos . "<br>";

//substr() devuelve parte de una cadena indicando el inicio y la longitud
$subtexto = substr($texto,12,5);
echo $subtexto . "<br>";

//strtoupper() convierte un string a mayúsculas
$textomayusculas = strtoupper($texto);
echo $textomayusculas . "<br>";

//strtolower() convierte un string a minúsculas
$textominusculas = strtolower($texto);
echo $textominusculas . "<br>";
