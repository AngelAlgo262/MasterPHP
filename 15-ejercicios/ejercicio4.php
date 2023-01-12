<?php
/*
Crear un scrip con 4 variables del tipo:
Array
string
int
boolean
e imprimir un mensaje segun el tipo de dato.
*/

$juegos = array("Super Mario Bros", "God Of War", "Manhunt");
$frase = "No hay malos muy malos, ni buenos tan buenos";
$numero = 262;
$verdadero = true;

echo "<h1>Tipos de datos disponibles</h1>";

echo gettype($juegos);
echo "<br />";

echo gettype($frase);
echo "<br />";

echo gettype($numero);
echo "<br />";

echo gettype($verdadero);
echo "<hr/>";

if(is_array($juegos)){
    echo "El array es de tipo ". gettype($juegos);
    echo "<hr />";
}

if(is_string($frase)){
    echo "$frase ,este texto es de tipo ". gettype($frase);
    echo "<hr />";
}

if(is_int($numero)){
    echo "$numero es del tipo ". gettype($numero);
    echo "<hr />";
}

if(is_bool($verdadero)){
    echo "$verdadero es del tipo ". gettype($verdadero);
    echo "<hr />";
}

?>