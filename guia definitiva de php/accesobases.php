<?php
/*Para conectar con una base de datos emplearemos la libreria mysqli
y podremos realizar distintas acciones con ella entre las que se
destacan las siguientes*/

/*Conectar con la conexion o BD:
$conexion = mysqli_connect(servidor, usuario, contraseña, [nombreBD])*/
$conexion = mysqli_connect("localhost", "root", "root") or die ("No se puede conectar");

/*Crear una BD:
$sentenciasql = "create database if not exists ejemplo"*/
$crearbd = "create database if not exists practica";
/*Para borrar una BD usaremos drop database nombreBD*/

/*Ejecutar sentencia SQL en la BD:
$resultconsulta = mysqli_query($conexion, sentenciaSQL)*/
$conectar = mysqli_query($conexion, $crearbd);

/*Seleccionar la BD:
mysqli_select_db($conexion,"ejemplo")*/
mysqli_select_db($conexion, "practica");

/*Obtener y procesar los resultados:
- mysqli_num_rows($resultconsulta) devuelve el número de filas de la consulta
- mysqli_fetch_array($resultconsulta) devuelve un array con las filas de la consulta
- mysqli_fetch_assoc($resultconsulta) devuelve un array asociativo donde la clave será el nombre de cada columna y el valor será el de cada dato
- mysqli_fetch_row($resultconsulta) hace lo mismo que la anterior pero devuelve un array escalar*/

/*Control de errores:
- mysqli_error($conexion) devuelve la descripción de error
  de la última operación en la BD
- mysqli_errno($conexion) devuelve el nº de error de la
  última operación en la BD (0 = noerror)*/

/*Las sentencias SQL se pueden dividir en 3 tipos que veremos a continuación*/
/*SENTENCIAS DDL (definir datos)*/
//Crear tablas
$creartabla = "create table if not exists tabla1(
                id int(5) not null,
                nif char(9) not null,
                nombre varchar(40) not null,
                primary key (nif))";
if(mysqli_query($conexion, $creartabla)){
    echo "Se ha creado con éxito tabla1 dentro de la BD practica";
}else{
    echo "Se ha producido un error al crear tabla1 dentro de BD practica";
}
//Borrar tablas
//mysqli_query($conexion, "drop table tabla1");

/*SENTENCIAS DML (manipular datos)*/
//Insertar datos
$insertar1 = "insert into tabla1 values (1, '16793456A', 'Juan Garces Ramirez')";
mysqli_query($conexion, $insertar1);
$insertar2 = "insert into tabla1 values (2, '26587397H', 'Damian Munoz Munoz')";
mysqli_query($conexion, $insertar2);
//Modificar datos
$modificar = "update tabla1 set nombre = 'Juan Garces Marin'
                where nif = '16793456A'";
mysqli_query($conexion, $modificar);
//Borrar datos
/*$borrar = "delete from practica where id = 2";
mysqli_query($conexion, $borrar);*/

/*SENTENCIAS DQL (consultar datos)*/
//Seleccionar datos
$instruccion1 = "select * from tabla1";
$resultado = mysqli_query($conexion, $instruccion1)
                or die("Fallo en la consulta");
//Mostrar el resultado de la consulta
$nfilas = mysqli_num_rows($resultado);
if($nfilas > 0){
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NIF</th>";
    echo "<th>Nombre</th>";
    echo "</tr>";
    for($i = 0; $i < $nfilas; $i++){
        $result1 = mysqli_fetch_array($resultado);
        echo "<tr>";
        echo "<td>".$result1['id']."</td>";
        echo "<td>".$result1['nif']."</td>";
        echo "<td>".$result1['nombre']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

/*Cerrar la conexión con la BD:
mysqli_close($conexion)*/
mysqli_close($conexion);