<?php
    switch ($alumnos['ciudad']){
        case 'Valencia':
            echo 'Alumno de Valencia';
            break;
        case 'Madrid':
            echo 'Alumno de Madrid';
            break;
        case 'Barcelona':
            echo 'Alumno de Barcelona';
            break;
        default:
            echo 'Alumno fuera de España';
            break;
    }
?>