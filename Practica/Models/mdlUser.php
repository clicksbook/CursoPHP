<?php
class mdlUser{
    static public function addUser($datos){
        return "Estas ingresando los siguientes datos ".$datos["name"].' '.$datos["email"];    
    }
    static public function updateUser($datos){

    }
}

/**
 * tb_user
 * id
 * name
 * email
 * password
 * status
 */