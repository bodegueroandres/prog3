<?php

class UserService {//se declara un array que contiene los datos de usuario y contraseña almacenados(una especie de base de datos, los datos se almacenan en un array asociativo clave=>valor)

    private $array_datos = [
        "exe" => "7896",
        "user_2" => "pass2",
        "user_3" => "pass3"
    ];

//funciones
    
    function validate($u_recibido, $p_recibido) {
    //esta funcion valida el usuario y la contraseña ya que primero pregunta si exixte en el array el usuario ingresado por teclado(comparando lo ingresado con las claves del array) y en la segunda condicion pregunta si el valor del array perteneciente a la clave encontrada coincide con el pass ingresado por teclado y devuelve verdadeoro o falso segun corresponda 
        
        if (isset($this->array_datos[$u_recibido]) && $this->array_datos[$u_recibido] == $p_recibido) {
            return true;
        }else{
            return FALSE;
        }
        
    }
      


}
