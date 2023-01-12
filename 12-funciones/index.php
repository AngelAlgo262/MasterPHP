<?php
/*
Funcion: Conjunto de instrucciones con un nombre en concreto que se 
puede utilizar muchas veces, es habitualusarlas en aplicaciones complejas.
Ejemplo. Se define ña funcion

function nombreDeFuncion($parametros opcionales){
    bloque de instrucciones;
}

Para reutilizarla se hace con el nombre y el parametro, ejemplo

nombreDeFuncion($mi_parametro);
*/

//Ejemplo 1 funcion sin parametros
//Se define la funcion

function imprimeNombres(){
    echo "Angel Algo <br />";
    echo "Ana Algo <br />";
    echo "Eve Algo <br />";
    echo "Nati Algo <br />";
    echo "<hr>";
}

//Se llama o invoca tantas veces sea necesario
/*
imprimeNombres();
imprimeNombres();
imprimeNombres();
*/

//Ejemplo 2 funcion con parametro recibido por GET
//Se define la funcion con el parametro que va a recibir al ser invocada
function tabla($numero){
    echo "<h3>Tabla de Multiplicar del $numero</h3>";

    for($i = 1; $i <= 10; $i++){
        $operacion = ($numero * $i);
        echo "$i x $numero = $operacion". "<br />";
    }

}

//Se invoca la funcion con el parametro
if(isset ($_GET ['numero'])){
    tabla($_GET['numero']);
}else{
    echo "<h3>Indique numero en la URL para realizar operacion</h3>";
    echo "<h5>Ejemplo ?numero=cualquier numero</h5>";
} 

/*
Ejemplo 3 funciones con mas de un parametro y parametros opcionales, para definir
mas de un parametros, solo se pone coma y se define la variable, para definir parametros 
obligatorio solo se define la variable, cuando se requiere que el parametro sea opcional 
se define la variable y asigna un valor por defecto.
Las funciones siempre deven devolver algo con un return, usan un echo se considera una mala
practica.
*/
//   Parametros      obligatorios  opcional
function calculadora($num1, $num2, $negrita = false){
    $suma = ($num1 + $num2);
    $resta = ($num1 - $num2);
    $multi = ($num1 * $num2);
    $division = ($num1 / $num2);
    $cadena_texto = "";

    //Si negrita es T (true) estonces abre un h1
    if($negrita){
        $cadena_texto.= "<h1>";
    }

    $cadena_texto.= "La Suma de $num1 y $num2 es : ".$suma. "<br/>";
    $cadena_texto.= "La Resta de $num1 menos $num2 es : ".$resta. "<br/>";
    $cadena_texto.= "La Multiplicación de $num1 por $num2 es : ".$multi. "<br/>";
    $cadena_texto.= "La Divición de $num1 entre $num2 es : ". $division. "<br/>";

    //Si negrita es T (true) cierra H1
    if($negrita){
        $cadena_texto.= "</h1>";
    }
    $cadena_texto.= "<hr/>";
    //retorna $cadena_texto
    return $cadena_texto;
}
//Al llamar a la funcion tomara el tercer parametro como falso por que asi se ha definido
echo calculadora(76, 34);
echo calculadora(14, 8,true); //Se llama a la funcion con los 3 parametros
echo calculadora(99, 43);

/*
Ejemplo 4 llamar desde una Funcion a otra, es muy utiul cuando las funciones son muy grandes
se recomienda separar en funciones mas pequeñas
*/

function getNombre ($nombre)
{
    $texto = "El nombre es: $nombre";
    
    return $texto;
}

function getApellido ($apellido){
    $texto = "El apellido es: $apellido";

    return $texto;
}

function devuelveNombre($nombre, $apellido){
    $texto = getNombre($nombre)
            ."<br />".
             getApellido($apellido);

    return $texto;
}

echo devuelveNombre("Angel", "Ocampo");