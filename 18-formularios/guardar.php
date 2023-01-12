<?php

if(isset ($_POST['titulo']) && isset ($_POST['descripcion'])){
    echo "<h4> Gracias por enviar su informacion</h4>". $_POST['titulo'].' '. $_POST['descripcion'];
}


?>