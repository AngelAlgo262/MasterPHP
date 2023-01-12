<?php

/*
Mostrar todos los numero pares del 1 al 100
*/

echo "<h1>Todos los numeros pares del 1 al 100</h1>";

for($contador = 1; $contador <=100; $contador++){
    if($contador %2 ==0){ //Todos los nuemeros cuyo residuo sera 0 al dividir entre dos
    echo "<h3>$contador</h3>";
    }
}

?>