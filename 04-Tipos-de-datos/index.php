<?php
//Declarar variables
$significado = "Los tipos de datos son una característica que determina como es que se procesan los datos en un programa.";

$arrayTipos = [
    "Entero" => "Es un tipo de dato que representa un número entero.",
    "Decimal" => "Es un tipo de dato que representa un número decimal.",
    "Cadena de texto" => "Es un tipo de dato que representa una secuencia de texto",
    "Booleano" => "Es un tipo de dato que representa un valor lógico.",
    "Nulo" => "Es un tipo de dato que representa la ausencia de un valor",
];

$numero = 10;
$decimal = 10.5;
$texto = "Texto";
$verdadero = true;
$nulo = null;


echo "<h1>Tipos de datos definición:</h1>";
echo $significado;

echo "<h1>Tipos de datos:</h1>";
echo "<ul>";
    foreach($arrayTipos as $clave => $valor){
        echo "<li>$clave: $valor</li>";
    }
echo "</ul>";

echo "<h1>Ejemplos:</h1>";
    echo "Este es un valor del tipo Entero (Integer): $numero <br>";
    echo "Este es un valor del tipo Decimal (float) : $decimal <br>";
    echo "Este es un valor del tipo Cadena de texto (string): $texto <br>";
    echo "Este es un valor del tipo Booleano: $verdadero <br>";
    echo "Este es un valor del tipo Nulo: $nulo <br>";
?>