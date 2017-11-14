<?php

/**
 * Description of MainService
 *
 * @author EXE
 */
abstract class MainService {
    protected abstract function login($username,$password);
    protected abstract function error();
    protected abstract function message($exito,$username);
    
}//declaracion de la clase padre que debe ser abstracta
