<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainService
 *
 * @author EXE
 */
abstract class MainService {
    protected abstract function login($username,$password);
    protected abstract function error();
    protected abstract function message($exito,$username);
    
}
