<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-Imprimir</title>
</head>

<body>
    <h1>Master en PHP</h1>
    <p>
        /*
        Se puede inyectar HTML en PHP y viceversa
        */
    </p>
    <?= "Con un <?= ?> también se puede incrustar PHP en HTML"; ?>
    <?php
        echo "<h2> Esto es PHP </h2>";
        echo "<h3> Lista de juegos Good Of War </h3>";
        echo "<ul>"
                ."<li>God Of War 1</li>"
                ."<li>God Of War 2</li>"
                ."<li>God Of War 3</li>";
        echo "<p>Estas es toda la lista </p"        
    ?>
</body>

</html>