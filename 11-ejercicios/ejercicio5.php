<?php
/*
Escribir un programa que muestre la secuencia de numeros entre dos numeros que lleguen por get 
(es decir mostrar la secuencia del 1 al 80), en caso de que no lleguen indicarselo al usuario 
*/

if(isset ($_GET ['numero1']) && isset ($_GET ['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($algo=$numero1; $algo<=$numero2; $algo++){
            echo "<h1>$algo</h1>";
        }
    }else{
       echo "<h1>El numero1 debe ser menor al numero2</h1>";
    }


}else{
    echo "<h1>Los parametros no existen</h1>";
}


?>