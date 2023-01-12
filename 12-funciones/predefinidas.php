<?php
/*
Funciones predefinidas: Son las funciones que ya trae el lenguaje (PHP) se puede consultar 
                        la documentacion oficial.
*/

$nombre = "Angel Ocampo";
var_dump($nombre); //sirve para debuggear
echo "<br>";

//Fecha
echo date ('d-M-y');
echo "<br />";
echo time();
echo "<br />";

//Matematicas
echo "Raiz cuadrada de 90: ". sqrt(90);
echo "<br />";
echo "Numero aleatorio entre 1 y 50 ". rand(1,50);
echo "<br />";
echo "Numro pi". pi();
echo "<br />";
echo "Redondeo : ". round(7.98543, 2); //el segundo parametro es para definir los decimales
echo "<br />";

//Mas funciones generales
echo gettype($nombre); //indica el tipo de dato de la variable
echo "<br />";
//condicion sobre el tipo de dato
if(is_string($nombre)){
    echo "La variable nombre es un string";
}
echo "<br />";

if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}
echo "<br />";
//isset se usa para evaluar si algo existe
if(isset ($edad)){
    echo "La variable si existe";
}else{
    echo "La variable no existe";
}

echo "<br />";
//Trim permite quitar los espacios de un texto a la derecha e izquierda
$frase = "      Mi contenido       ";
var_dump(trim($frase));

echo "<br>";
//Eliminar cvaribles o indices
$year = 2022;
unset($year);

echo"<br />";

$texto = "            desde hace mil año   ";

if(empty(trim($texto))){
    echo "La variable esta vacia";
    echo $texto;
}else{
    echo "La variable contiene". " ($texto)";
}

echo "<br />";

//contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);

//Encontrar caracteres

$frase = "La vida es bella";
echo "<br />";
echo strpos($frase, "ida");

echo "<br />";
//remplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br />";
//MAYUSCULAS y minisculas
echo strtoupper($frase);
echo "<br />";
echo strtolower($frase);


/*
No olvidar revisar la documentacion oficial de php
*/

?>