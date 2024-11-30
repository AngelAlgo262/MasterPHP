<?php
//Variables
$significado = "Las constantes son valores que NO pueden ser cambiados, piensa en ellas como un contenedor donde solo vas a pones un valor y no vas a cambiarlo nunca.";

$uso = "Se usan para declarar valores que nunca cambiaran su valor, se declaran con la palabra reservada define(constante, valor), se puede mostrar con echo: <br>";

$notas = [
    "Como buena practica se declaran con mayúsculas",
    "Las constantes se pueden declarar en cualquier parte del código.",
    "Es obligatorio definir un valor pra la constante",
    "Pueden tener cualquier nombre y tipo de dato",
    "No se pueden cambiar una vez declaradas",
    "PHP cuenta con constantes predefinidas, como php_os, php_version, __line__, __file__, __function__",
    "PHP_OS, muestra el SO donde se está ejecutando el script",
    "PHP_VERSION, muestra la versión de PHP que se está utilizando",
    "PHP_LINE, muestra la línea donde se encuentra el script",
    "PHP_FILE, muestra el archivo donde se encuentra el script",
    "PHP_FUNCTION, muestra el nombre de la función donde se encuentra el script",
];

//Declarar constantes
define('NOMBRE', 'Angel Ocampo');
define('PI', 3.1416);
define('IVA', 0.16);
define('GRAVEDAD', 9.81);
//Mostrar en pantalla
echo "<h1>Constantes</h1>";
echo $significado;
echo "<h1>Como se usa?</h1>";
echo $uso . "<br>";
echo "Mi nombre no va a cambiar nunca: " . NOMBRE . "<br>";
echo "El valor de PI, siempre sera el mismo: " . PI . "<br>";
echo "El IVA , siempre sera el mismo: " . IVA . "<br>";
echo "La gravedad, siempre sera la misma: " . GRAVEDAD . "<br>";

echo "<h1>Notas:</h1>";
echo "<ul>";
foreach ($notas as $nota) {
    echo "<li>$nota</li>";
}
echo "</ul>";

echo "<h1>Uso de constantes predefinidas en PHP</h1>";
echo "El sistema operativo donde se está ejecutando el script es: " . PHP_OS."<br>";
echo 'La version de PHP que se tiene instalada es '.PHP_VERSION.'<br>';
echo 'El archivo original de esta pagina es '.__file__;
