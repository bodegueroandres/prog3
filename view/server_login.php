<?php
	session_start();
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
$username=$_POST['user'];
$password=$_POST['pass'];

$server= new Server();
$exito=$server->login($username, $password);
$server->message($exito,$username);
if ($exito) {
	//asignaremos el nombre de usuario como nombre de la sesion
	$_SESSION['username']=$username;
	header('Location: todolist.php');
}else{
	die();
}









