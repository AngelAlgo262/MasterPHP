<?php
/*
Mostrar las tablas de multiplicar del 1 al 10 en una tabla de HTML
*/
echo "<h1>Tablas de Multiplicar</h1>";

echo "<table border = '1'> <tr>"; //inicio de la tabla
echo "<tr>"; //inicio fila 1
//contenido de la fila 1
for($cabecera = 1; $cabecera <= 10; $cabecera++){
    echo "<td>Tabla del $cabecera";
}
echo "</tr>"; //fin de fila 1

//contenido de la tabla
echo "<tr>"; //inicio fila 2
for($detalle = 1; $detalle <= 10; $detalle++){
    echo "<td>";
        for($detalle2 = 1; $detalle2 <= 10; $detalle2++){
            echo "$detalle x $detalle2 = ". ($detalle * $detalle2). "<br />";
        }

    echo "</td>";
}

echo "</tr>"; //fin fila 2

echo "</table>"; //fin de la tabla

?>