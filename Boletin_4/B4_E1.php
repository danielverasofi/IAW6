 <?php
function notas_aleatorias($size) {  //creamos una funcion con parametro de entrada $size
        for($i=0; $i<$size; $i++)   //un bucle que seguira� activo mientras $i sea mas peque�o que el parametro de entrada se�alado, empezando desde 0.
            {                       
            $notas[$i]= rand(0,10); //almacenaje de numeros aleatorios en el array del 0 al 10 mientras se cumpla.
            echo $notas[$i];        //se van motrando los valores del array
            echo "<br>";            //salto linea
            }
}
echo "Las 5 notas aleatorias:";     //muestra texto
echo "<br><br>";                    //2 saltos linea
notas_aleatorias(5);                //llamada a la función con parametro de entrada numero 5
?>
  