<?php
/*
Escribir un programa que agrege valores a un array, siempre y cuando el valor sea menor a
120 caracteres y mostrarlo en pantalla
*/


$coleccion = array();

for($i=0; $i <120; $i++){
    array_push($coleccion, 'Elemento '. $i);
}

var_dump($coleccion);

?>