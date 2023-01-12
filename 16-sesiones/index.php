<?php
/*
Sesión: Almacena y persiste datos del usuario mientras que navega es un sitio web
hasta que cierra sesion o el navegador
*/

//Se inicia sesion
session_start();

//variable local
$variable_normal = "Soy una variable normal";

//variable de sesion, el valor "Soy una sesion ACTIVA" se manyrndra hasta cerrar sesion
$_SESSION['variable_persistente'] = "Soy una sesion ACTIVA";

echo $variable_normal. "<br />";
echo $_SESSION['variable_persistente'];


?>