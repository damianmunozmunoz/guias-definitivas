<?php
//Cada sesión tiene su Security Identifier SID
//Así se inicia una sesión
session_start();
//A partir de aquí para referirnos a las variables de sesión usaremos $_SESSION
$_SESSION['holamundo'] = "Hola mundo";
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesiones</title>
</head>

<body>
    <?php
    echo $_SESSION['holamundo'];
    echo '<br>Has accedido a esta página ' . $_SESSION['contador'] . ' veces';
    //Tenemos las funciones session_name y session_id que los devuelven
    echo '<br>El nombre de la sesión es: '.session_name();
    echo '<br>El id de sesión es: '.session_id();
    //Así eliminamos una variable de sesión
    //unset($_SESSION['contador']);
    //Así se finaliza la sesión
    //session_destroy();
    ?>
</body>

</html>