<?php
require_once  'MainService.php';
require_once  'UserService.php';


class Server extends MainService {//la clase hereda de Main Service
    private $userService;
    function __construct() {//constructor para instanciar  
        $this->userService = new UserService();
    }
    public function login($username, $password) {//funcion que recibe el usuario y el pass por teclado para controlar su validacion
        $exists = $this->userService->validate($username, $password);//se llama a la funcion para validar alojada en la clase UserService
        if ($exists) {
            //echo 'Bienvenido'.$username.'<br/>';
            $exito= true;
            return $exito;
        }else{
            //echo 'El usuario no está registrado';
            $exito= false;
            return $exito;
        }//se devuelve un true si se validó con éxtito o false si no se logro
    }

    protected function error() { 
        
    }

    public function message($exito,$username) { //recibe el resultado de la funcion login  y muestra el mensaje correspondiente segun el resultado de la funcion login
        if($exito){

            echo "<h1>Bienvenido $username</h1>";
        }else{
            echo "<h1>El usuario no está registrado</h1>";
        }
    }


    //
}
