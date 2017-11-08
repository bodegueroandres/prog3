<?php

class UserService {

    private $array_datos = [
        "exe" => "7896",
        "user_2" => "pass2",
        "user_3" => "pass3"
    ];

//funciones
    
    function validate($u_recibido, $p_recibido) {
        
        if (isset($this->array_datos[$u_recibido]) && $this->array_datos[$u_recibido] == $p_recibido) {
            return true;
        }else{
            return FALSE;
        }
        
    }
      


}
