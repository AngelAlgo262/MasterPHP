<h1>Codigo HTML en un archivo PHP</h1>

<?php //Indica que es un archivo php
    echo "<h1>Codigo PHP</h1>";
    print ("Hola desde un print");

    /* Para usar php se requiere de un sevidor web
        Se puede tener HTML en un archvo PHP, pero no es una buena practica
    */

    echo "<!-- COMENTARIO HTML-->";

    #Varaibles
    //$nombre = "Angel Ocampo";
    $nombre = existeParametro("nombre",false);
    
       /*
    if (!$nombre){ //Si nombre es diferente a True 
        $nombre="Angel"; //entonces nombre = Angel
    }    
    */
    $texto = "Repaso de PHP 8 con $nombre";

    //$altura = $_GET["altura"];
    
    $altura = existeParametro("altura", true);

    /*
    if ($altura == false){ //Si altura es falso 
        $altura=170; //entonces altura = 170
    }
    */
    $textoFinal = "<h1>".$texto.", su altura es: ".$altura."cm. </h1>";

    echo $textoFinal;
    echo $textoFinal;
    echo $textoFinal;

    $textoFinal .="Te he troleado perrin";
    echo $textoFinal;
    
    #Variable por GET son las que llegan por el navegador con un ?
    $_GET["nombre"];
    if ($_GET["nombre"]== false){ 
        $_GET["nombre"]="No tienes nombre?";
    }
    echo "<hr>";  
    echo $nombre." desde una funcion ". $altura;

    #Condiciones
    if($altura >=170){
        echo '<h3 style="background:green; color: white;">Es una persona alta</h3>';
    }else {
        echo '<h3 style="background:blue; color: white;">Es una persona bajita</h3>';
    }

    #Funcion Bloque de codigo que se puede ejecutar N veces
    function existeParametro ($parmetro, $numero){
        if (isset($_GET[$parmetro])){ //Si existe parametro por get 
            $valor = $_GET[$parmetro]; //entonces parametro = get
        }else{
            $valor="Texto por defecto"; //si no es asi valor = texto por defecto

            if ($numero){ //si numero es falso
                $valor = 100; //entonces valor = 100
            }
        }
        return $valor;
    }

    #Array coleccion de datos
    $personas = ["Angel", "Ana", "Eve", "Nat","algo","ago mas","aun mas"];   

    echo $personas[0]." desde un array"; //Para mostrar los datos del array NO lleva "=" se empieza desde el cero

    echo "<h1>Listado (dentro de PHP)</h1>";

        foreach ($personas as $nombre){
            echo "<li>$nombre</li>";
        }

?>

<h1>Listado (fuera de PHP)</h1>
<ul>
    <?php
        foreach ($personas as $nombre){
            echo "<li>$nombre</li>";
        }
    ?>
</ul>