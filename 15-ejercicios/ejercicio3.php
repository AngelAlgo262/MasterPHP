<?php
/*
Crear un programa que compruebe si una variable esta vacía, si esto es asi, llenarla con minúsculas
y mostrarla al usuario en mayúsculas y en negrita
*/

$algo = "";
$value = $_GET['value'];

if(empty ($value)){
    echo 'La variable esta vacía, pero puede indicar un valor en la URL (?value=lo que requiera ver)';
}else{
    $mayus = strtoupper($value);
    echo 'El valor capturado es: '. "<strong>".  $mayus. "</strong>";
}

?>