<?php

echo '<h2>'.'Su nombre es '.$_GET['nombre'].'</h2>';
echo '<h2>'.'Su apellido es '.$_GET['apellido'].'</h2>';
echo '<h2>'.'Su nombre completo es '.$_GET['nombre'].' '.$_GET['apellido'].'</h2>';
echo '<h2>'. 'Su numero de telefono es '. $_GET['num'].'</h2>';
echo '<a href=formulario.php>Regresar al formulario</a>';

?>