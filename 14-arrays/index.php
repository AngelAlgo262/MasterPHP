<?php
/*
Array: Es una coleccion de datos bajo un unico nombre, se puede accedera esos valores mediante un
indice numerico o alfanumerico, es una variable que contiene muchas variables
*/

$pelicula = "Batman"; //Con una variable solo podemos almacenar un valor
//Con un array se peden almacenar muchos valores
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake','Sara Jay'];
/*
Array asociatio, es cuando se relaciona un nombre con un valor, esto se hace
con la flecha =>
*/
$personas = array(
    'nombre' => 'Angel',
    'apellido' => 'Ocampo',
    'web' => 'angelocampoweb.com'
);
echo ($personas['web']); //llama al indice web
echo "<hr>";

//Ejercicio. Muestra al usuario la peliula Batman y a Sara Jay

echo $peliculas[0];
echo"<br />";
echo $cantantes[2];
echo "<hr />";

/*
Se puede recorrer todo el array con un bucle for
*/
echo "<h1> Listado de Peliculas </h1>"; 
echo "<ul>";
for($i = 0; $i <count($peliculas); $i++ ){
    echo"<li>". $peliculas[$i ]. "</li>";
}
echo"</ul>";
echo "<hr>";

/*
El bucle foreach esra diseñado para trabajar con arrays
*/
echo "<h1>Listado de Cantantes</h1>" ;
echo "<ul>";
foreach($cantantes as $cantantes){ //Recorre $cantantes, por cada iteracion crea $cantantes
    echo "<li>". $cantantes. "</li>";
}
echo "</ul>";

/* 
Array multidimencionales: Son los array que estan dentro de un array (array anidado) ejemplo
*/

$contactos = array (
    array(
        'nombre' => 'Angel',
        'apellido' => 'Ocampo'
    ),
    array(
        'nombre' => 'Ana',
        'apellido' => 'Arizaga'
    ),
    array(
        'nombre' => 'Eve',
        'apellido' => 'Ocampo',
        'email' => 'eve@eve.com'
    ),
    array(
        'nombre' => 'Nati',
        'apellido' => 'Ocampo',
        'email' => 'nati@nati.com'
    ),
);
echo "<hr>";
/*para acceder a los indices se define el array donde se encuentra y en otro el indice*/
var_dump($contactos[0]['nombre']); 
echo "<hr>";

//Se pede recorrer con foreach
echo "<ul>";
foreach($contactos as $contactos){
    echo "<li>". ($contactos['nombre']). "</li>";
}
echo "</ul>";
