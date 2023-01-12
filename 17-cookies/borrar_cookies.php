
<?php
/*
Para borrar cookies se deben de caducar, para ellos se resta cualquier cantidad
a la hora actual
*/

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']); //elimina la cookie
    setcookie('micookie','',time()-10); //caduca la cookie
}

if($_COOKIE['micookie']){
    unset($_COOKIE['unyear']);
    setcookie('unyear','',time()-400);
}

/*
Redireccion, evita a href, se puede hcaer con hearder que es una funcion para cambiar la cabecera
y se puede cambiar la localizacion ejemplo
header('Location: archivo a redirigir')
*/

header('Location: ver_cookies.php')
?>
