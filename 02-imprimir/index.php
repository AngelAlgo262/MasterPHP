<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Master en PHP </h1>
    <?= "Con un <?=?> tambein se peude imprimir";?>
    <?php

    echo "<h3>Lista de Juegos:</h3>";
    echo "<ul>"
        ."<li>GTA</li>"
        ."<li>Manhunt 2</li>"
        ."<li>Mario Bros</li>";

    echo "<p>Esta es toda" ."-"."La lista de juegos</p>";

    ?>
</body>

</html>