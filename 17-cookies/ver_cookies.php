<?php

/*
Para mostrar el contenido d las cookies se usa la variable $_COOKIE, la cual es un array 
asociativo.
*/

if(isset ($_COOKIE['micookie'])){
    echo "<h1>". $_COOKIE['micookie']. "</h1>";
}else{
    echo "No existe la cookie";
}

if(isset ($_COOKIE['unyear'])){
    echo "<h1>". $_COOKIE['unyear']. "</h1>";
}else{
    echo "No Existela cookie";
}
?>

<!--Borrar-->
<a href="borrar_cookies.php">Borrar mis Galletas</a>

<br />

<!--Crear-->
<a href="crear_cookies.php">Crear mis Galletas</a>