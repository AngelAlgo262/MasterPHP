<?php
/*
Crera un programa que compruebe si una variable esta vacia, si esto es asi, llenarla con manusculas
y mostrarla al usuario en mayusculas y en negrita
*/

$algo = "";

if(empty ($algo)){
    $algo = "minusculas";
    $mayus = strtoupper($algo);
    echo "<strong>". $mayus. "</strong>";
}else{
    echo "Escribe algo";
}

?>