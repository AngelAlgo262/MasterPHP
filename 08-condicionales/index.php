<?php

/*
Estructuas de control, estan en todas los lenguajes, permiten controlar las acciones
de la aplicacion, exisen dos tipos, las de eleccopn (if) y las de iteracion (bucle o ciclo)
estructura de if:
if (condicion){
    instruccion
}else{
    otras instrucciones
}
Operadores de comparacion
==  Igual
=== Identico
!=  Diferente
<>  Diferente
!== No identico
<   Menor que (Se usa entre dos variables)
>   Mayor que (Se usa entre dos variables)
<=  Menor igual (Se usa entre dos variables)
>=  Mayor ugual (Se usa entre dos variables)

Operadores logicos
&& and (y)
|| or (o)
! not (no)
and
or
*/

$color = "morado";

if($color == "azul"){
    echo "El color es Azul";
}else{
    echo "El color NO es Azul";
}

echo "<br/>";

$year = 2021;

if($year < 2022){
    echo "Es un año anterior a 2022";
}else{
    echo "Es un año posterior a 2022";
}

//Ejemplo 3 if anidado 

$nombre = "Angel ocampo";
$ciudad = "CDMX";
$continente = "America";
$edad = 28;
$mayoria_edad = 18;

if($edad >= 18){
    echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';

    if($continente == "America"){
        echo '<h1>'.'y es de '.$ciudad.'</h1>';
    }else{
        echo '<h1>'.'y no es Americano';
    }
}else{
    echo '<h1>'.$nombre.' no es mayor de edad'.'</h1>';
}

//Ejemplo 4 else if se usa para no anidar tantos if

$dia = 6;

if ($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "Es Martes";
}elseif($dia == 3){
    echo "Es Miercoles";
}elseif($dia == 4){
    echo "Es Jueves";
}elseif($dia == 5){
    echo "Es Viernes";
}else{
    echo "Es fin de semana";
}
echo "<hr>";
//Ejemplo 5 operadores logicos

$edad1= 18;
$edad2 = 64;
$edad_oficial = 17;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Estas en edad laboral";
}else{
    echo "No puedes laborar";
} 
echo "<hr>";

$pais = "Australia";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En $pais se habla Español";
}else{
    echo "En $pais NO se habla Español";
}

echo "<hr>";

//Ejemplo 6 switch evalua la misma variable mas de una vez

$dia = 7;

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
        break;
}

/*GOTO Es un opererador que sirve para llevar de una parte del codigo a otra
estructura GOTO marca; la "marca" puede ser cualquier texto r debe de estar
en el mismo archivo y despues del goto*/ 

goto algo;
echo "<h4>Instruccion 1 </h4>";
echo "<h4>Instruccion 2 </h4>";
echo "<h4>Instruccion 3 </h4>";
echo "<h4>Instruccion 4 </h4>";

algo:
    echo "<h4> Me salte 4 echos</h4>";