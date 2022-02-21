<?php
function estadisticas($array) { //creamos funcion
    $notas = count($array);     //se introduce como valor en $notas el numero de elementos del array
    $max=max($array);           //se introduce como valor en $max el maximo valor
    $min=min($array);           //se introduce como valor en $min el valor minimo
    $med=array_sum($array)/$notas;  //se introduce como valor en $med, el valor medio resultante de la suma y division de la variable $notas
    echo "Máxima nota: $max <br>"; //se muestra la variable $max
    echo "Mínima nota: $min <br>"; //se muestra la variable $min
    echo "La media de las notas: $med"; //se muestra la variable $med
}
$array = array(1, 10, 1, 7, 5 ,3 ,8, 8, 6, 10); //creacion de $array con 10 elementos
estadisticas($array); //llamada a la funcion
?>
