<?php
/*
Construir un programa que tenga un array con 8 numeros desordenados y hacer lo siguiente:
-Recorre todo el arreglo y mostrarlo
-Ordenar y mostrar el arreglo
-Mostrar la longitud
-Buscar un indice que llegue por get
*/

//Construir un arraycon 8 numeros desordenados
$numeros = array(17, 74, 89, 32, 90, 33, 85, 19);

//funcion para no repeter codigo
function mostrarArray($numeros){
    $resultado = "";
    foreach($numeros as $numeros){
        //$resultado = $resultado. $numeros. "<br />";
        $resultado .= $numeros. "<br />";
    }
    return $resultado;
} 

//Recorre todo el arreglo y mostrarlo
echo "<h4> Recorrer todo el arreglo y mostrarlo </h4>";
echo mostrarArray($numeros);

//Ordenar y mostrar el arrglo
echo "<h4> Ordenar y mostrar el arreglo </h4>";
sort($numeros);
echo mostrarArray($numeros);

//Mostrar la longitud del arreglo
echo "<h4> Mostrar la longitud del array </h4>";
echo count($numeros);

//Buscar un indice que llegue por get
if(isset ($_GET ['numero'])){
$busqueda = $_GET ['numero'];
echo "<h4> Buscar el numero $busqueda </h4>";
$search = array_search($busqueda, $numeros);
if(!empty($search)){
    echo "<h5>El numero $busqueda existe en el Array, en el indice $search </h5>";
}else{
    echo "<h5>El numero $busqueda NO existe en el Array</h5>";
}
}else{
    echo "<h5> Puede hacer la busqueda de un numero del Array desde la url </h5>";
}


?>