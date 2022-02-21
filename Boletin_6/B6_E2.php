<html>
    <body>
        <?php
        setcookie('usuario', 'Daniel');// Creamos una cookie mediante la funcion expuesta, con valor de Daniel.
        echo "¡Bienvenido $_COOKIE[usuario]!";//Muestra el texto introducido y el valor de la variable asociativa de la cookie.
        ?>
    </body>
</html>
