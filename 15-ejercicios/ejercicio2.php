<?php
/*
Escribir un programa que agregue valores a un array, siempre y cuando el valor sea menor a
120 caracteres y mostrarlo en pantalla
*/


$collection = array();

for($i=0; $i <120; $i++){
    array_push($collection, 'Elemento '. $i);
}

var_dump($collection);

?>