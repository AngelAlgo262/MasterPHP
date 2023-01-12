<?php

/*
Variables super globales: Son las variables que estan disponobles en todos
los ambitos de desarrollo de PHP, existen las variables de servidor, get, post, request
cookies.
Las variables de Servidor con un array, por lo que, se tiene que definir el indice a 
mostrar 
*/

//Variable $_SERVER indice SERVER_ADDR muestra la ip del servidr web
echo '<h1>'.$_SERVER['SERVER_ADDR'].'</h1>';

//Variable $_SERVER indice SERVER_NAME muestra el nombre del servidr web
echo '<h1>'.$_SERVER['SERVER_NAME'].'</h1>';

//Variable $_SERVER indice SERVER_SOFTWARE muestra la ip del servidr web
echo '<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1>';



?>