$edad = 25;
echo 'edad es '. ($edad-=5). '<br/>';<?php

/*Constante es un contenedor que guarda cualquier informacion que NO puede variar
Para declarar una constante se hace con "define ('nombre de la constante', 'valor de la constante')"
Para mostrar una constante se hace con echo nombre de la constante
*/

define('nombe','Angel Ocampo');
define('web', 'angelocampoweb.com');

echo '<h1>'.nombe.'</h1>';
echo '<h1>'.web.'</h1>';

/*
Constantes predefinidas, son constantes que ya tiene php y muestran informacion ejemplo:
php_os, muestra el sistema operativo
php_version muestra la version de php que se esta usando
php_extension_dir muestra la ruta del archivo
__line__ muestra la linea 
__file__  muestra la ruta completa del archivo
__function__ muestra el nombre de la funcion
*/

echo 'Este equipo ejecuta '.PHP_OS.'<br>';
echo 'La version de PHP que se tiene instalada es '.PHP_VERSION.'<br>';
echo 'El archivo original de esta pagina es '.__file__;

?>