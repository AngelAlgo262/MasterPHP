        <!--Cuando se incrusta php en html (vistas) las llaves ({}) se cambian 
por dos puntos (:) donde abre y por endforeach o endif donde cierra-->
<?php foreach ($categoria as $categoria) : ?>
            <!--aqui la llave abre-->
            <th><?= $categoria; ?></th>
            <!--abreviatura de php para imprimir en patalla-->
        <?php endforeach; ?>
        <!--aqui la llave cierra-->