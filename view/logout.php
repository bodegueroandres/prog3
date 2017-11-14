<?php
session_start();
session_destroy();//se destruye la sesion del usuario
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>SESION TERMINADA</h2>
        <a href="index.php">INICIO</a> //boton para volver a la pantalla de login
    </body>
</html>