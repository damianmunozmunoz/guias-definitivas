<?php
    if($alumnos['edad']>30){
        echo "Alumno mayor de 30 años";
    }else{
        echo "Alumno menor de 30 años";
    }
    if($alumnos['ciudad']=="Valencia"){
        echo "Alumno de Valencia";
    }else if($alumnos['ciudad']=="Madrid"){
        echo "Alumno de Madrid";
    }else if($alumnos['ciudad']=="Barcelona"){
        echo "Alumno de Barcelona";
    }else{
        echo "Alumno fuera de España";
    }
?>