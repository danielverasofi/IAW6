<?php
function notas_aprobadas($array) {          //creamos la funcion con parametro de entrada
    $u=0;                                   //declaramos la variable con valor 0
    $contador = count($array);              //introducimos valor en $contador los elementos de $array
        for($i=0; $i<$contador; $i++) {     //bucle que sera efectivo mientras $i sea inferior a contador, comenzara en cero e incrementara
                if ( $array[$i] >= 5 ) {    //si el elemento del array es mayor o igual sucedera lo siguiente
                    $array2[$u]=$array[$i]; //se incrementara para que cada nota aprobada se guarde en una posicion diferente
                    $u++;
                }
        }
        return $array2;                     //la funcion devuelve $array2
}
$array = array(1, 10 ,1, 7, 5 ,3 ,8 ,8,6 ,10);  //creamos $array y sus 10 elementos
echo "Notas que has aprobado:<br>";             //texto mostrado
$aprobadas = notas_aprobadas($array);           //se le asigna el valor del resultado de la funcion a $aprobadas
$contador2 = count($aprobadas);                 //introducimos valor en contador2 los elementos del array aprobadas
for($i=0; $i<$contador2; $i++)                  //bucle activo si $i es inferior que contador2 comienza en 0 e incrementa
{
    echo $aprobadas[$i];                        //se muestran los elementos de $aprobadas
    echo "<br>";                                //salto linea
}
?>