<?php
/*
Cookies: Es un fichero que se almacena en el ordenador del usuario que visita la web, con el
fin de recordar datos o rastrear el comportamiento del mismo en la web. Para crer una cookie 
se usa setcookie("nombre" (valor que solo puede ser texto), caducidad, ruta, dominio);
*/

//Cookie basica
setcookie("micookie", "valor de mi cookie");

//Cookie con expiracion de un año (segundos, minutos, horas, dias)
setcookie("unyear", "valor de cookie de 364 dias",time()+(60*60*24*365));

/*
Redireccion, evita a href, se puede hcaer con hearder que es una funcion para cambiar la cabecera
y se puede cambiar la localizacion ejemplo
header('Location: archivo a redirigir')
*/

header('Location: ver_cookies.php')

?>
