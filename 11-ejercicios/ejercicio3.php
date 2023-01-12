<?php

/*
Crear un programa que muestre los cuadrados de los primeros 40 numeros naturales, usando 
while y for
*/

$contador = 0;

while($contador <=40 ){
    $cuadrodo = ($contador * $contador);
    echo "El cuadrado de $contador es ". $cuadrodo."<br/>";
    $contador++;
}

for($contador = 0; $contador <= 40; $contador++){
    $cuadrado = $contador * $contador;
    echo "El cuadrado de $contador es $cuadrado"."<br/>";
}
?>