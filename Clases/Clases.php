<?php
/**
 * PHP incluye un modelo de objetos completo. Algunas de sus caracteristicas son: 
 * visibilidad, vlases y metodos abstractos y finales, metodos magicos adiconales, infaces, clonaciones
 */

 class ctrUser{
   public static function addUser($datos){
        return print_r($datos);
    }
    static public function getUser($all, $byId){
        mdlUser::getUser($all,$byId);
    }
 }

 class mdlUser{
    public static function getUser($all,$byId){
       if(!empty($all) && empty($byId)){
            echo 'Estas solicitando obtener todos los usuarios';
       }else if(empty($all) && !empty($byId)){
            echo 'Estas solicitando obtener un usuario por su id';
       }
    }
 }
/*$datos = [
    "nombre"=>"Jose",
    "apellido"=>"Hernandez"
];
 $addUser =  new ctrUser();
 $addUser->addUser($datos);*/

 ctrUser::getUser(null,true);