<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login con Objetos</title>
    </head>
    <body>
        <h1>ingrese usuario y contraseña</h1>
        <form action="server_login.php" method="post">
            <input type="text" class="form-control" id="username" name="user" placeholder="Nombre de usuario" value="">
            <input type="password" class="form-control" id="password" name="pass" placeholder="Contraseña" value="">
            <input type="submit" name="submit" class="btn btn-primary" value="Ingresar">  
        </form>
        
    </body>
</html>
