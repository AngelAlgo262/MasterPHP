<!DOCTYPE html>
<!--Atributos para input 
autofocus = "autofocus" pone el foco en el campo
disabled = "disabeld" desactiva el campo
maxlength = "5" maximo de caracteres que se puede escribir
minlength = "5" minimo de caracteres que se pueden exribir
pattern = "[A-Z]+" obliga a compli con el formto letras mayusculas de la A a la Z
required = "required" campo requerido
placeholder = "texto" pone un texto en el campo que se quita al escribir
valu = "texto" pone texto en el campo-->

<!--Tipos de campo
button: pone un boton 
<input type="button" name ="boton" value="boton" />
checkbox: pone un check, sepuede marcar por defecto con checke
<input type="checkbox" name="sexo" value="Hombre checked="checked"/">
color: permite seleccionar un color, al envir se recibe el codigo hexagesimal
<input type="color" name="color" />
fecha: pone un campo de fecha
<input type="date" name="fecha" />
email: campo de correo
<input type="email" name="email" />
file: permite seleccionar un archivo, pude subir as de un archivo con multiple
<input type="file" name="archivo" multple="multiple"/>
hiden: oculta el campo si envia informacion pero lo oculta al usuario
<input type="hiden" name="email" />
number: permite seleccionar numeros
<input type="number" name="numero" />
password: oculta el texto que se introduce
<input type="password" name="pass" />
radio: permite seleccionar un valor con un radiobuton
<input type="radio" name="continente" />
url: valida que el valor indtroducido sea una url
<input type="url" name="web" />
textare:permite introducir textos muy grandes
<textarea></textarea>
select: crea una seleccion 
<select name="Peliculas">
    <option value="Spiderman">Spiderman</option>
    <option value="Guardianes de la Galaxia">Guardianes de la Galaxia</option>
    <option value="Rocky 1">Rocky 1</option>
    <option value="Dia de entrenamiento">Dia de entrenamiento</option>
    <option value="Wolverine origenes"></option>
</select>
-->
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulario PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <p><input type="text" name="nombre" /></p>

        <label for="apellido">Apellido</label>
        <p><input type="text" name="apellido" /></p>
        
        <br/>
        <label for="boton">Boton</label>
        <p><input type="button" name ="boton" value="boton" /></p>
       
        <label for="sexo">Sexo</label>
        <p>
            Mujer<input type="checkbox" name="sexo" value="Mujer" checked="checked"/>
            Hombre<input type="checkbox" name="sexo" value="Hombre" />
        </p>

        <label for="color">Color</label>
        <p><input type="color" name ="color" /></p>
        
        <label for="fecha">Fecha</label>
        <p><input type="date" name ="fecha" /></p>

        <label for="email">email</label>
        <p><input type="email" name ="email" /></p>

        <label for="archivo">archivo</label>
        <p><input type="file" name ="archivo" multiple="multiple"/></p>

        <label for="numero">Numero:</label>
        <p><input type="number" name ="numero" /></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name ="pass" /></p>

        <label for="continente">Continente:</label>
        <p>
            America <input type="radio" name ="continente" value="America" />
            Asia <input type="radio" name ="continente" value="Asia" />
            Oceania <input type="radio" name ="continente" value="Oceania" />
        </p>

        <label for="web">Web:</label>
        <p><input type="url" name ="web" /></p>
        <label for="textarea">Cuentanos de ti</label>
        <p><textarea name="textarea"></textarea></p>
        <br />
        <label for="games">Juegos</label>
        <p>
        <select name="games">
            <option value="GOW">God Of War</option>
            <option value="SilentHill">Silent Hill Origins</option>
            <option value="Manhunt">Manhunt 2</option>
            <option value="Alone">Alone in the dark</option>
        </select>
        </p>
        <br />
        <input type="submit" value="Enviar" />

    </form>
</body>

</html>