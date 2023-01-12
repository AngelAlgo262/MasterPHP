<?php
/*
Crear una array con el contenido de la siguiente tabla:
accion  aventura    deportes
GOW     assasins    FIFA 22
GTA     crash       PES 22
COD     prince of   MOTO GP 22
        persia

Presentar al usuario un html con la tabla, Cada fila debe de ir en un archivo distinto.
*/

//Se crea array anidado
$tabla = array(
    "ACCION" => array("God Of War", "GTA San Andreas", "COD"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("FIFA  22", "PES 22", "Moto GP"),
);
//Se muestra el nombre de los arreglos
$categoria = array_keys($tabla);
//var_dump($categoria);
?>

<!--Se crea tabla de html-->
<table border="1">

<?php require_once 'juegos/encabezados.php';?>
<?php require_once 'juegos/primerFila.php';?>
<?php require_once 'juegos/segundaFila.php';?>
<?php require_once 'juegos/tercerFila.php'; ?>

</table>