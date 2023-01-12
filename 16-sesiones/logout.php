<?php
/*
Para cerrar la sesion se usa session_destroy() pero antes se tiene que iniciar
*/

session_start();

session_destroy();

//Al entar a logout.php la sesion del usuario se cerrara y borrará los datos almacenados


?>