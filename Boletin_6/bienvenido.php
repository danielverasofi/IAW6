<?php
$nombre=$_POST['n'];//se introduce el valor de la matriz asociativa en la variable nombre
$apellidos=$_POST['a'];//se introduce el valor de la matriz asociativa en la variable apellidos
    setcookie('nombre', $nombre);//Se crea una cookie llamada nombre con valor de "$nombre$"
    setcookie('apellidos', $apellidos);//Se crea una cookie llamada nombre con valor de "$apellidos"
if(isset($_COOKIE['nombre'], $_COOKIE['apellidos']))//Si existen las cookies definidas anteriormente, se ejecutara:
    {
    $mensaje="Bienvenido de nuevo: $_COOKIE[nombre] $_COOKIE[apellidos].";//Introducimos como valor un texto y las dos variables asoociativas.
    }
    else//Si no existe las cookies ejecutara:
    {
        $mensaje='No existen cookies todavia.';//Se introduce como valor un texto
    }
?>
<html>
    <head>
        <title>ASIR</title>
    </head>
    <body>
    <?php
    echo $mensaje;//Mostrara en la pantalla el texto de la variable definida
    ?>
    </body>
</html>
    
    
