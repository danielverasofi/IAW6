<?php
function agregar_nota($array, $nota) { //creamos funcion
    array_push($array, $nota);         //con esta funcion agregamos $nota al final de $array
    $contador2 = count($array);         //establecemos como valores de $contador2 el numero de elementos del array
    echo "Notas más una agregada:<br>";     //mostramos texto
    for($i=0; $i<$contador2; $i++)     //creamos bucle que comenzara si $i sea mas pequeño que contador2
    {
        echo $array[$i];                //se muestran valores del array
        echo "<br>";                    //salto linea
    }
}
$array = array(1, 10, 1, 7, 5, 3, 8, 8, 6, 10); //creacion $array con 10 elementos
$contador1 = count($array);                     //introducimos como valor en contador1 el numero de elementos del $array  
echo "Notas:<br>";                                   //mostamos texto
for ($i=0; $i<$contador1; $i++)                 //creamos bucle que comenzara mietras $i sea mas pequeño que contador1 (empieza en 0 e incrementa)
{
    echo $array[$i];                            //se muestran los valores de $array
    echo "<br>";                            //salto linea
}
echo "<br><br>";
agregar_nota($array, 5);                        //llamada a la funcion que tiene como parametros de entrada a $array y el numero 5
?>
