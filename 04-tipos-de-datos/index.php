<?php
/*
TIPOS DE DATOS:
Entero (int / integer) = 99 
Coma flotante /  decimales (float / double) = 3.45
Cadenas (string) = "Hola yo soy un string"
Booleano (bool) = true false
Array (Colección de datos)
Objetos

Para obtener el tipo de dato de una variable
se usa gettype ($variable);

Una variable no puede iniciar con números ni contener guiones medios ni caracteres
especiales, se recomienda nombrar a la variable con algo que
haga referencia a lo que esta contiene

Debugear: Es el proceso mediante el cual se localizan errores en el 
código

Se recomienda usar comillas simples ya que php las interpreta mas rapido
Con comillas dobles se pueden hacer saltos de linea, retornos de carro y
tabulaciones con :
\n = nueva linea
\r = retorno de carro
\t = tabulación
pero estos solo se ven en la consola, es decir, en el navegador no 
se muestran las nuevas lineas, para poder ver los saltos de linea
tabulaciones y demás se tiene que abrir el  archivo desde la consola ejemplo:
php nombreArchivo.php
*/

$numero = 100;
$decimal = 3.14;
$texto = "Soy un texto \t $numero";
$verdadero = true;
$nula;

echo $texto;

echo "<h1>".gettype($nula)."</h1>";

//Debugear

$mi_nombre []= "Angel Ocampo";
$mi_nombre []= "Chanchito feliz";
var_dump($mi_nombre);


?>