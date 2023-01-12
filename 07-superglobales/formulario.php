<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title> Formulario PHP </title>
</head>

<body>
    <h1>Formulario en PHP</h1>
    <form method="GET" action="recibir.php">
        <p>
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </p>
        <p>
            <label for="num">Celular</label>
            <input type="number" name="num" />
        </p>
        <input type="submit" value="Enviar" />
        <input type="reset" value="limpiar" />
    </form>
</body>

</html>