<?php
/*
Existen funciones para trabajar con arrays como:
sort: ordena los indices alfabéticamente (de la A a la Z)
arsort: Ordena los indices alfabéticamente (de la Z a la A)
*/
$cantantes = ['2pac', 'Drake','Sara Jay', 'Alfredo Jimenez', 'Pitbull', 'Emminem'];
$numeros = [1,0,6,4,8,5,2,7];

//Ordenar
arsort($cantantes);
var_dump($cantantes);
echo "<hr>";

/*Agregar indices. Para agregar indices es mas efectivo usar array push también se puede
poner el corchete vació y asigna un valor
*/
array_push($cantantes, 'Waor'); //Se coloca el array y el indice separado por coma, lo cual agregara el valor
var_dump($cantantes);

$cantantes [] = 'Chente'; //Se coloca el array corchete vació y el valor de indice, sto va agregar un valor
var_dump($cantantes);
echo "<hr>";

/*
Eliminar indices. Con array_pop se elimina el ultimo indice agregado, para eliminar
en indice en especifico se usa unset
*/
array_pop($cantantes);
unset($cantantes[2]); //Para eliminar se define el array y el indice que se requiere eliminar
var_dump($cantantes);
echo "<hr>";
/*
Se puede obtener un indice aleatorio con array_rand
*/
echo array_rand($cantantes); //Muestra un indice aleatorio
echo "<hr>";
$indice = array_rand($cantantes);
echo $cantantes[$indice]; //Muestra el cantante del indice aleatorio
echo "<hr>";

/*
Poner el arreglo en reversa array_reverse
*/
var_dump(array_reverse($numeros));
echo "<hr>";

/*
Se puede buscar indices de un Array con array_search
*/

$resultado = array_search('Alfredo Jimenez',$cantantes);
var_dump($resultado);
echo "<hr>";

/*
Contar indices de un array, se puede hacer con count o con sizeof
*/
echo count($cantantes);
echo "<hr>";
echo sizeof($cantantes);
?>