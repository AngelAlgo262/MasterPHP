<?php
/*
En todos los archivos donde se use $_session se tiene que iniciar sesion
*/
session_start();

//Se llama a $vaiable_normal, pero al no existir en este archivo no la muestra
//echo $vaiable_normal;

//Se llama a $_session la cual si se muestra por que aun no se ha cerrado la sesion
echo $_SESSION['variable_persistente'];

?>