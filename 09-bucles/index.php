<?php
/*
 Bucles: Son estructuras de control que itera o repite la ejecución de una serie de instrucciones
 en base a una condición, el bucle while es el mas común y su estructura es:
 while(condición){
    bloque de instrucciones
    otras instrucciones
 } 
 cuando la instrucción ya no se cumple sale del while 
*/

$numero=0;
while($numero <=100){
    echo $numero;
    if ($numero !=100){
        echo ", ";
    }
    $numero++;
}

echo "<hr/>";
/*Ejemplo 1 bucle con información recibida por get, se puede obligar a recibir un tipo de dato
casteando la variable, esto se hace colocando entre paréntesis el tipo de dato (casteo de datos)*/

if(isset ($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else $numero = 1;

echo "<h1>Tabla de multiplicar del $numero</h1>";

$contador =1;

while($contador <=10){
    echo "$numero x $contador = ".($numero * $contador). "<br />";
    $contador++;
};

echo "<hr/>";

/*do while variante de while que se ejecuta por lo menos una ves se usa cuando se requiere
ejecutar una condicion una ves bajo una condicion la estructura es
do {instrucciones} while (condiciones); ejemplo

do {
  //instucciones  
}while (condicion);
*/

$edad=17;
$contador=1;

do{
    echo "Tienes acceso al local privado $contador <br/>"; 
    $contador++;
}while($edad >= 18 && $contador <= 10);




?>