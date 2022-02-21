<?php
function imprime_tabla($numero) { //creamos la funcion con un parametro de entrada
    if ($numero=="todas") {       //si el parametro de entrada es igual ocurrira lo siguiente
        for($i=0; $i<10; $i++) {  //bucle que actuara si $i es menor que 10, empieza en 0 e 
            imprime_tabla($i+1); //se llama a la funcion, pero el parametro $i se incrementa
        }
    }
    else if($numero>=1 && $numero<=10) {    //condicion de que si lo anterior no se ha cumplido y $numero es >= a 1 y <= a 10 pasara lo siguiente
        echo "Tabla de multiplicar del $numero.<br>";   //muestra texto en pantalla
        for($i=0; $i<10; $i++) {            //bucle que actuara mientras $i sea inferior o igual a 10, empieza en 0 e incrementa
            echo $numero."x".$i." = ".$numero*$i."<br>";    //se muestra el valor 'x' el valor de $i '0' y el producto 
        }
        echo "<br>";        //salto linea
    }
}
echo "Imprime solamente la tabla de un número, en este caso la del 3.<br>";    //muestra texto
imprime_tabla(3);                                                               //llama a la funcion con parametro 3
echo "Imprime todas las tablas gracias al parámetro 'todas'";                  //muestra texto
imprime_tabla('todas');                                                         //llama a la funcion con parametro todas
?>
