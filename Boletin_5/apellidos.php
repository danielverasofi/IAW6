<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    
        <h1>Introduce tus apellidos</h1>
        <form action="nombrecompleto.php" method="post">
         <!--Llamamos al formulario con el primer atributo, que llama al fichero php,
            el segundo atributo define el metodo para enviar la informacion-->
         <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
            <!--pasamos el valor de la variable asociativa a un hidden que el usuario no vea y pueda ser usado por el archivo php-->
            <input type="text" name="surname"><br><br> <!--El usuario introducira los datos que trabajara con el fichero nombrecompleto.php.-->
            <input type="submit" value="Agregar"><!-- Creacion del boton que enviara la informacion a el archivo php.-->            
        </form>
</body>
    
</html>
