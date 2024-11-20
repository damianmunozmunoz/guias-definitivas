<?php
    $alumnos = ['Pedro', 'Marta', 'Alberto', 'Carolina', 'Rubén'];
    $i = 0;
    $j = 0;
    while($alumno != 'Rubén'){
        $alumno = $alumnos($i);
        echo "Nombre del alumno ".$alumno."<br>";
        $i++;
    }

    do{
        $alumno = $alumnos($j);
        echo "Nombre del alumno ".$alumno."<br>";
        $j++;
    } while($alumno!='Pedro');
?>