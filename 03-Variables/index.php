<?php
//Declarar variables
$significado = "Una variable es una etiqueta que se utiliza para almacenar un valor en memoria, se puede pensar en ella como una caja
                donde se almacena un valor.";
$arrayReglas = [
    "Carácter clave: " => "Las variables en PHP se inician con el símbolo $.",
    "Descriptivas: " => "El nombre de la variable debe estar acorde con lo que se guarda.",
    "Sin caracteres especiales: " => "El nombre de la variables no puede contener caracteres especiales.",
    "Sin espacios: " => "El nombre de la variable no puede contener espacios.",
    "Sin números al inicio: " => "El nombre de la variable no puede comenzar con un numero.",
    "Evitar palabras reservadas: " => "No utilizar palabras reservadas de PHP para nombrar variables, if, for, else, etc.",
];
$arrayCaracteristicas = [
    "Son mutables: " => "Las variables pueden cambiar su valor.",
    "Son dinámicas: " => "Las variables pueden ser creadas y eliminadas durante la ejecución del script",
    "No tienen tipo: " => "Las variables no tienen un tipo específico, su tipo de dato es determinado por el contenido",
    "No tienen tamaño: " => "Las variables no tienen un tamaño específico, su tamaño es determinado por el contenido",
];
//Mostrar en pantalla
echo "<h1>Variables:</h1>";
echo $significado;
echo "<h1>Reglas:</h1>";
echo "<p>Existen reglas para definir variables: </p>";

echo "<ul>";
//recorrer arreglo clave valor
foreach ($arrayReglas as $clave => $valor) {
    echo "<li><strong>$clave</strong>$valor</li>";
}
echo "</ul>";
echo "<h1>Características:</h1>";
echo "<p>Las variables tienen las siguientes características: </p>";
echo "<ul>";
//recorrer arreglo clave valor
foreach ($arrayCaracteristicas as $clave => $valor) {
    echo "<li><strong>$clave</strong>$valor</li>";
}
echo "</ul>";
