<?php
class ctrUser{
    static public function addUser($datos){
         return mdlUser::addUser($datos);
    }
}