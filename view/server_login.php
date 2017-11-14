<?php
	session_start();//usaremos sesiones en este archivo
   require_once '../controllers/Server.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Server
 *
 * @author EXE
 */
//recibimos los datos ingresados en el index
$username=$_POST['user'];
$password=$_POST['pass'];
//creamos una instancia de server que sirve para llamar al metodo login pasandole los datos que guardamos del index
$server= new Server();
$exito=$server->login($username, $password);//ejecutamos el login
$server->message($exito,$username);//muestra el mensaje correspondiente
if ($exito) {//si hubo exito para acceder procedemos a asignarle a la sesion el nombre del usuario
	//asignaremos el nombre de usuario como nombre de la sesion
	$_SESSION['username']=$username;
	header('Location: todolist.php'); //redirigimos al archivo que contiene el formulario e indica el nombre de la sesion activa
}else{
	die();
}









