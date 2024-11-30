<?php
//Declarar variables
$significado = "Los tipos de datos son una característica que determina como es que se procesan los datos en un programa.";

$arrayTipos = [
    "Entero" => "Es un tipo de dato que representa un número entero.",
    "Decimal" => "Es un tipo de dato que representa un número decimal.",
    "Cadena de texto" => "Es un tipo de dato que representa una secuencia de texto",
    "Booleano" => "Es un tipo de dato que representa un valor lógico.",
    "Nulo" => "Es un tipo de dato que representa la ausencia de un valor",
    "Array" => "Es un tipo de dato que representa una colección de valores",
    "Objetos" => "Es un tipo de dato que representa un conjunto de propiedades y métodos",
];

$numero = 10;
$decimal = 10.5;
$texto = "Texto";
$verdadero = true;
$nulo = null;

$notas = [
    "Se pueden usar comillas simples o dobles para definir cadenas de texto.",
    "Se recomienda usar comillas simples ya que PHP las interpreta mas rápido.",
    "Con comillas dobles se pueden incluir variables, expresiones incluso hacer saltos de linea, tabulations y retorno de carro.",
    "instrucciones como salto de linea, tabulation y retorno de carro se pueden hacer con comillas dobles y poniendo un backslash (\) antes de la instrucción.",
    "n = nueva linea",
    "t = tabulador",
    "r = retorno de carro",
    "Los saltos de linea tabulations y retornos de carro, solo se pueden ver desde la consola del servidor",
    "Se puede ejecutar PHP desde consola con php nombreArchivo.php",
    "Se puede obtener el tipo de dato de una variable con la función gettype()",
    "Los arreglos (array) se declaran con []",
    "Debugger es el proceso mediante el cual se identifican y se solucionan errores en el código",
];

//Mostrar en pantalla
echo "<h1>Tipos de datos definición:</h1>";
echo $significado;

echo "<h1>Tipos de datos:</h1>";
echo "<ul>";
foreach ($arrayTipos as $clave => $valor) {
    echo "<li>$clave: $valor</li>";
}
echo "</ul>";

echo "<h1>Ejemplos:</h1>";
echo "Este es un valor del tipo Entero (int / Integer): $numero <br>";
echo "Este es un valor del tipo Decimal (float / double) : $decimal <br>";
echo "Este es un valor del tipo Cadena de texto (string): $texto <br>";
echo "Este es un valor del tipo Booleano (boll): $verdadero <br>";
echo "Este es un valor del tipo Nulo: $nulo <br>";

echo "<h1>Notas:</h1>";
echo "<ul>";
foreach ($notas as $nota) {
    echo "<li>$nota</li>";
}
echo "</ul>";

//Ejemplo para validar en consola
$textoConsola = "Si tu quieres bailar, jugar, saltar, gratar, puedes venir a mi casa 
                \n rubidubi, dabada, y no se qeu mas ....";
echo $textoConsola;                
