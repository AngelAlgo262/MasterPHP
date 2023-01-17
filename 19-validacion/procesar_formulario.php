<?php
//Confirmar que la información llega por POST
$error = 'faltan_valores';

if (
    !empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    !empty($_POST['edad']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pass'])
) {

    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Validación de campo por campo buscar expresiones regulares
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
        $error = 'nombre';
    }

    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)) {
        $error = 'apellido';
    }
    /*//hac un filtro en una variable, revisa que edad sea un numero
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }*/

    if (!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }

    /*if (empty($pass) || strlen($pass) < 5) {
        $error = 'password';
    }*/
} else {
    $error = 'faltan_valores';
}

if ($error != 'ok') {
    header("Location:index.php?error=$error"); //regresa a index
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos correcto</title>
</head>

<body>
    <h1>¡Gracias por enviar su informacion!</h1>
    <?php if ($error == 'ok') : ?>
        <!--Sintaxis para una vista en lugar de abrir llave ( { ) se ponen dos puntos (:)-->
        <p><?= "Nombre = " . $nombre ?></p>
        <!--En una vista es el equivalente a poner echo-->
        <p><?= "Apellido = " . $apellido ?></p>
        <p><?= "Edad = " . $edad ?></p>
        <p><?= "Email = " . $email ?></p>
    <?php endif ?>
    <!--En lugar de cerrar llave ( } ) se pone endif-->
    <!--Regresar-->
    <a href="index.php">Enviar de nuevo</a>
</body>

</html>