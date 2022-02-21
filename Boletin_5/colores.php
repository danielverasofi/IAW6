<html>
    <head>
        <title>ASIR</title>
    </head>
    <?php
    $seleccion=$_POST['equipos'];//se introduce la valor de la matriz asociativa en la variable.
    $fondo="black"; // creamos la variable fondo con el valor black.
    switch ($seleccion) { //creacion del switch donde se realizara la operacion segun el valor de la variable seleccion.       
    case "madrid": //si el valor es madrid ejecutara lo siguiente
        $fondo="purple";//el valor de la variable cambiara a morado.
        echo "<center><h1><font size=7 color='white'>Real Madrid</font></h1></center>";
        //muestra texto, incluyendo estilos.
        break;//salimos switch.
    case "barcelona"://si el valor de la variable es barcelona ejecutara lo siguiente.
        $fondo="red";//el valor de la variable cambiara a rojo
        echo "<center><h1><font size=7 color='white'>F.C BARCELONA</font></h1></center>";
        //muestra texto con variacion de estilos
        break;
    }
    ?>
    <body style="background-color: <?php echo $fondo; ?>"/>
    <!--Se cambia el color del fondo del body usando el valor modificado de la variable segun la funcion ejecutada-->
    
</html>

