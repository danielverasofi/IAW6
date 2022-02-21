<?php
date_default_timezone_set('Europe/Madrid');//Establecemos la zona horaria que utilizaran las funciones del script.
if(isset($_COOKIE['fecha']))//si existe la cookie fecha ocurrirá lo siguiente.
{
    setcookie('fecha', date("d/m/y H:i:s"));//Cambiamos el valor de la cookie fecha.
            $mensaje='La última vez que estuviste fue:'.$_COOKIE['fecha']; //Se Introducimos el valor de mensaje un texto y el valor de la anterior variable asociativa
}
    else //Si no existe la cookie fecha, iniciare el siguiente proceso.
    {
    setcookie('fecha', date("d/m/y H:i:s")); //Crea la cookie fecha y se le da el valor de la fecha y hora actual.
    $mensaje='Aún no te conocemos';//Se introduce el valor de mensaje, un texto.    
    }
    ?>
<html>
    <head>
        <title>B6_E3</title>
    </head>
    
        <p>
            <?php
            echo $mensaje; //Se mostrara en pantalla el contenido de la variable
            ?>
        </p>
    
        
</html>
