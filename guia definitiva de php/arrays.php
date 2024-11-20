<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            //Para definir arrays lo haremos de la siguiente manera
            $temp = [15,16,12,12.5,14,14.5,18,14,14,15,17,
                     13,13.5,14.5,12.5,11,10,9,11,14,13,
                     13,13,12.5,12,12.5,13,14,11,10];
            $totalValues = 0;
            
            //Con count() nos devuelve el número total de valores que hay dentro del array
            $totalElements = count($temp);
            
            //Con un foreach podemos recorrer cómodamente los arrays
            foreach ($temp as $tempitem){
                $totalValues += $tempitem;
            }
            $avgtemp = $totalValues/$totalElements;
            echo "La temperatura media en este mes fue de "
            . round($avgtemp,2) ." ºC";

            /*Hay 2 tipos de arrays:
            - Indexados que no tienen un número fijo de elementos
            y podemos añadirlos cuando queramos.
            - Asociativos que enlazan una clave con un valor y podemos acceder a
            dichos valores refiriendonos a la clave correspondiente.
            */
            
            //ARRAYS INDEXADOS
            $alumnos = ["Pepe", "Juan", "Amparo", "Ramón", "Alicia", "Cristina"];
            //Para añadir elementos a un array usaremos $array[] = valor
            $alumnos[] = "Damián";
            //Para referirnos a un elemento usaremos $array[i]
            $nombre = $alumnos[2];

            //ARRAYS ASOCIATIVOS
            $alumno = ["nombre" => "Pepe Navarro", "telefono" => 123456789,
            "ciudad" => "Valencia", "edad" => 29];
            //Para acceder a un elemento usaremos $array[clave]
            $telefono = $alumno['telefono'];
            //Para añadir elementos a un array asociativo usaremos array[clave] = valor
            $alumno["sexo"] = "hombre";

            //Para ordenar arrays usaremos las funciones sort()
            sort($temp); //Ordena de menor a mayor por índice
            rsort($temp); //Ordena de mayor a menor por índice
            asort($alumno); //Ordena de menor a mayor por valor
            arsort($alumno); //Ordena de mayor a menor por valor
            ksort($alumno); //Ordena de menor a mayor por clave
            krsort($alumno); //Ordena de mayor a menor por clave
        ?>
    </body>
</html>