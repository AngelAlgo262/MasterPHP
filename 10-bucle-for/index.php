<?php
/*
FOR es el bucle mas usado en todos los lengujes de programacion, sintaxis
for(variable contador; condicion; actualizando el contador){
    bloque de condiciones
}
la primer variable solo se ejecuta al inicio del bucle, para a la 
condicion si evalua como true para a actualizar el contador e itera hasta
que la condicion sea false ejemplo
*/

//Ejemplo Tabla de Suma
if(isset ($_GET ['suma'])){
    $suma = (int) $_GET['suma'];
}else $suma = 1;

echo "<h1>Tabla de suma del $suma</h1>";

for($contador = 1; $contador <= 10; $contador++){
    echo "$contador + $suma = ". ($suma + $contador). "<br/>";
}

echo "<hr/>";
//Ejemplo Tabla de Multiplicar

if(isset ($_GET ['multi'])){
    $multi = (int) $_GET['multi'];
}else $multi = 1;

echo "<h1>Tabla de multiplicar del $multi</h1>";

for($contador = 1; $contador<=10; $contador++){
    
    echo "$contador x $multi = ". ($contador * $multi). "<br/>";
}

echo "<hr/>";

if(isset ($_GET ['resta'])){
    $resta = (int) $_GET ['resta'];
}else $resta = 1;

echo "<h1>Tabla de resta de $resta</h1>";

for($contador = 1; $contador <=10; $contador++){
    if($resta == 0){
        echo "No se puede restar cero";
        break;
    }
    echo "$contador - $resta = ". ($contador - $resta). "<br/>";
}

/*
Break termina la ejecucion del bloque, suele usarse con un if o directamente en
el código
*/

?>