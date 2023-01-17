<?php
/* Escribe un programa para que el usuario repase las tablas de multiplicar */

$error = 'Numero_invalido';


    if(isset ($_POST['tabla']) )
    {
        $tabla = $_POST['tabla'];

        for($i = 1; $i <=10; $i++){
            echo "$tabla * $i = " . ($i * $tabla) . "</br>";
        }
    }else{
        echo"<h1>Capture un número para repasar</h1>";
    }
    
