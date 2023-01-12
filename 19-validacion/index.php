<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de Formulario PHP</title>
</head>
<body>
    <h1>Validacion de formulario PHP</h1>
    <?php
        if(isset ($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_valores'){
                echo '<strong style="color:red">Por favor llene todos los datos</strong>';
            }
        }

        if(isset ($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'nombre'){
                echo '<strong style="color:red">El valor '. $error. ' no es valido</strong>';
            }
        }
        if(isset ($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'apellido'){
                echo '<strong style="color:red">El valor '. $error. ' no es valido</strong>';
            }
        }
        /*if(isset ($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'edad');{
                echo '<strong style="color:red">El valor '. $error. ' no es valido</strong>';
            }
        }*/
        if(isset ($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'email');{
                echo '<strong style="color:red">El valor '. $error, ' no es valido </strong>';
            }
        }
    ?>  
    <br/>  
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" /><br/>

        <label for="apellido">Apellido</label><br/>
        <input type="text" name="apellido" /><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad" /><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email" /><br/>

        <label for="pass">Constraseña</label><br/>
        <input type="text" name="pass" /><br/>

        <br/>
        <input type="submit" value="Enviar" />

    </form>
</body>
</html>