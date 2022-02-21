<?php
if(isset($_COOKIE['contador2']))//Si existe la cookie contador2, ejecutará lo siguiente.
{
    setcookie('contador2', $_COOKIE['contador2']+1, time() + 365 * 24 * 60 * 60);// Cambiamos el valor de la cookie incrementando su valor y lka misma expiración.
    $mensaje='Número de veces que nos has visitado:'.$_COOKIE['contador2']; // Se introduce texto y el valor de la variable asociativa de la cookie.   
}
else //Si no existe la cookie, ejecutara lo siguiente.
{
    setcookie('contador2', 1, time()+365*24*60*60);//Se crea la cookie, le asignamos valor de uno y una expiracion.
    $mensaje='Hola ya puedes ver nuestro contenido';//Introducimos como valor un texto.
}
?>
<html>
    <head>
        <title>B6_E4</title>
    </head>
    <body>
        <p>
            <?php
            echo $mensaje; //Se mostrara en pantalla el valor de la variable.
            ?>
        </p>
    </body>
</html>