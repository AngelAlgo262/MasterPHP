<?php

/*
Recoger dos numeros desde la url y hacer todas las operaciones basicas
suma, resta, multiplicacion y division con esos numeros
*/
//var_dump($_GET);
if(isset($_GET['numero1']) && isset ($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
}else {$numero1 = 0;
      $numero2 = 2;
};

echo "<h1>Operaciones basicas de los numeros $numero1 y $numero2</h1>";

$suma = ($numero1 + $numero2);
$resta = ($numero1 - $numero2);
$multiplicacion = ($numero1 * $numero2);
$divicion = ($numero1 / $numero2);

echo "<h3>Suma ($numero1 + $numero2 = $suma)</h3>";
echo "<h3>Resta ($numero1 - $numero2 = $resta) </h3>";
echo "<h3>Multiplcación ($numero1 * $numero2 = $multiplicacion) </h3>";
echo "<h3>Divición ($numero1 / $numero2 = $divicion) </h3>";

?>