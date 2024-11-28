<?php

/*
Operadores aritméticos son los simbolos habituales para realizar operaciones aritmeticas, se recomienda realizar 
la operacion entre parentesis
*/

$num1 = 65;
$num2 = 33;

echo 'Distintas operaciones con los numeros '.$num1.' y '. $num2.'<br/>'.'<br/>';
echo 'Suma: '.($num1 + $num2).'<br/>';
echo 'Resta '.($num1 - $num2).'<br/>';
echo 'Producto '.($num1*$num2).'<br/>';
//Resto, es el residuo de una divicion.
echo 'Resto '.($num1%$num2).'<br/>';

/*
Operadores de incremente y decremento aumentan o disminuyen 1 a la variable
*/

$year = 2022;

/*
Incremento
$year = $year +1;
*/
$year++;

echo $year.'<br/>';

/*
Decremento
$year = $year -1;
*/
$year--;
echo $year.'<br/>';

/*
Pre-incremento
$year = +1 $year;
*/
++$year;
echo $year.'<br/>';

/*
Pre-decremento
$year = -1 $year;
*/
--$year;
echo $year.'<br/>';

//Operadores de asignacion, son los operadores que asignan valores, como = ó +=

$edad = 55;
echo 'edad es '. ($edad+=5).'<br/>';

/*
El operadores += toma el valor de la variable y realiza la operacion del primer signo con el numero indicado
es decir $edad = $edad + 5; funciona igual con todos los operadores. El operador se tiene que usar entre parentesis
*/

$edad = 25;
echo 'edad es '. ($edad-=5). '<br/>';

$edad = 25;
echo 'edad es '. ($edad/=5). '<br/>';

$edad = 25;
echo 'edad es '. ($edad*=5). '<br/>';    