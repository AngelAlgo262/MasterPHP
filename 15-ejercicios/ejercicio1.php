<?php
/*
Construir un programa que tenga un array con 8 números desordenados y hacer lo siguiente:
-Mostrar el arreglo en desorden
-Recorre todo el arreglo y mostrarlo
-Ordenar y mostrar el arreglo
-Mostrar la longitud
-Buscar un indice que llegue por get
*/

//Construir un array con 8 números desordenados
$numeros = array(17, 74, 89, 32, 90, 33, 85, 19,23,11,55,1,98,34,12,66,51);

//función para no repetir código
function mostrarArray($numeros){
    $resultado = "";
    foreach($numeros as $numero){
        //$resultado = $resultado. $numeros. "<br />";
        $resultado .= $numero. "<br />";
    }
    return $resultado;
} 

//Recorre todo el arreglo y mostrarlo
echo "<h4> Recorrer todo el arreglo y mostrarlo (desordenado) </h4>";
echo mostrarArray($numeros);

//Ordenar y mostrar el arreglo
echo "<h4> Ordenar y mostrar el arreglo </h4>";
sort($numeros);
echo mostrarArray($numeros);

//Mostrar la longitud del arreglo
echo "<h4> Mostrar la longitud del array </h4>";
echo count($numeros);

//Buscar un indice que llegue por get (url)
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
    echo "<h5> Puede hacer la busqueda de un numero del Array desde la url, para esto, escriba ?numero=numero que requiere ver </h5>";
}


?>