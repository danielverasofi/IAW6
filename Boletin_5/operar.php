<html>
    <head>
        <title>ASIR</titlE>
    </head>
    <body>
        <?php
        $n1=$_POST['n1'];//Se introduce el valor en la matriz asociativa en la variable.
        $n2=$_POST['n2'];//Se introduce el valor en la matriz asociativa en la variable.
        $oper=$_POST['operacion'];//Se introduce el valor en la matriz asociativa en la variable.
        $result=0;//Se crea la variable con valor 0.
        switch ($oper) {//Creamos un switch que realizara una operacion segun el valor señalado.
        case "sumar"://si el valor de la variable es sumar realizara lo siguiente.
            $result=$n1+$n2;//se almacena en la variable el valor de la suma.
            break;//salimos del switch
        case "restar"://si el valor de la variable es restar realizara lo siguiente.
            $result=$n1-$n2;//se almacena en la variable el valor de la resta.
            break;
        case "multiplicar"://mismo proceso pero multiplicando
            $result=$n1*$n2;
            break;
        case "dividir"://mismo proceso pero dividiendo
            $result=$n1/$n2;
            break;
        }
        echo "El resultado de la operacion es: $result";//muestra texto en pantalla y el resultado de la operacion elegida.
        ?>
        </body>
        </html>
