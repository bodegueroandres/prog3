<?php
require_once  'MainService.php';
require_once  'UserService.php';


class Server extends MainService {
    private $userService;
    function __construct() {
        $this->userService = new UserService();
    }
    public function login($username, $password) {
        $exists = $this->userService->validate($username, $password);
        if ($exists) {
            //echo 'Bienvenido'.$username.'<br/>';
            $exito= true;
            return $exito;
        }else{
            //echo 'El usuario no está registrado';
            $exito= false;
            return $exito;
        }
    }

    protected function error() { 
        
    }

    public function message($exito,$username) { 
        if($exito){

            echo "<h1>Bienvenido $username</h1>";
        }else{
            echo "<h1>El usuario no está registrado</h1>";
        }
    }


    //put your code here
}
