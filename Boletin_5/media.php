<html>
    <head>
        <title>ASIR TU MEDIA</title>
    </head>
    <body>
        <?php
        $nota[0]=$_POST['a0']; //introducimos el valor de la matriz asociativa "$POST["a0"]" en el array.
        $nota[1]=$_POST['a1']; //introducimos el valor de la matriz asociativa "$POST["a1"]" en el array.
        $nota[2]=$_POST['a2']; //introducimos el valor de la matriz asociativa "$POST["a2"]" en el array.
        $nota[3]=$_POST['a3']; //introducimos el valor de la matriz asociativa "$POST["a3"]" en el array.
        $nota[4]=$_POST['a4']; //introducimos el valor de la matriz asociativa "$POST["a4"]" en el array.
        $nota[5]=$_POST['a5']; //introducimos el valor de la matriz asociativa "$POST["a5"]" en el array.
        $media= array_sum($nota)/6; //se introduce el valor de la media de todas las asignaturas, resultante de la suma y su division.
        $septiembre=true; //creamos $septiembre con valor de true.
        $contador= count($nota); //se introduce en contador el numero de elementos del array $nota.
        echo "Tu nota media del curso es de $media.";//mostrara el texto y el valor numerico resultante.
        for($i=0; $i<$contador; $i++) //creamos bucle que actuara mientras $i sea menor que contador.
        {
            if ($nota[$i] < 5) { //si el elemento es menor a 5 desencadena lo siguiente.
                $septiembre = FALSE;
            } //el valor cambiara a false
        }
        if ($septiembre) { //si $septiembre se mantiene en true iniciara lo siguiente
            echo "Enhorabuena, has pasado de curso con todo aprobado";
        } //se muestra texto
        else { //si el valor de septiembre no es ture iniciara lo siguente
            echo "Tendras que estudiar mas, no has aprobado todo";
        }
        ?>
    </body>
</html>
