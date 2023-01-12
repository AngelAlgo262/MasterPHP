<?php
/*
Varables globales: Se declaran fuera e una funcion t estan disponibles 
                   dentro y fuera de las funciones.

Variables locales: Se definen dentro de unafuncion y solo estan disponibles
                   dentro de la fincion a menos que se haga un return de esa
                   variable.
*/

/*Ejemplo variable global: $frase se puede usar dentro y fuera de cualquier funcion
                           solo se tiene que llamar con global*/
$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";
echo $frase;

function variableGlobal(){
    global $frase; //Se indica que $frase es global para poder ser usada
    echo "<h1>$frase</h1>";
}

variableGlobal();

/*
Ejemplo variable local: $year solo se puede usar dentro de la funcion, a menos que se haga
                        un return
*/

function variableLocal(){
    $year = 2022; //$year solo se puede usar dentro de variableLocal

    return $year; //Para poder usar la variable fuera de la fucnion se pone un return
}

echo variableLocal(). " Llamado desde variable local";

echo "<br/>";

echo variableLocal(). " Llamada desde fuera de la funcion local";

/*
Funciones variables: Son variables a las que se le define una funcion, para poder llamarla
                     solo se colocan ().
*/

function buenasDias(){
    return "<h3> Hola!! Buenos dias:)</h3>";
}

function buenasTardes(){
    return "<h3> Hola!! Buenas tardes:)";
}

function buenasNoches(){
    return "<h3> Hola!! Buenas noches:) </h3>";
}

$horario = buenasTardes(); //Se llama a la funcion con el nomrbe y ()

echo "$horario este es el retorno fijo de una funcion"; //se imprime la variable

/*Ejercicio: Difinier variable para construir el nombre de la funcion y solicitar
             al usuario dias tardes o noches por la url
*/

//$horario = $_GET['horario']; //$horario solo sera dias tardes o noches y se recibira por get

//con if se define $horario
if(isset ($_GET['horario'])){
    $horario = $_GET['horario'];
}else{
    echo "<h3>Indique en la URL ?horario=Dias, Tardes o Noches</h3>";
}
$miFuncion = "buenas".$horario; //para poder tener una parte en comun se cambia por buenas

echo $miFuncion(); //$horario + $miFuncion construyen el nombre de la funcion por lo que se coloca ()





?>