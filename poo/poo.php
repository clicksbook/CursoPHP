<?php
class coche{
    public function encender($marca){
        echo "El coche a encendido marca $marca<br>";
    }
}

/**
 * coche
 * marca
 * -On
 * -Off
 * -run
 */
$marca1= "Honda";
$marca2= "Toyota";
$marca3= "Hyundai";
$marca4= "Kia";
$coche1 = new coche();
$marca01= $coche1->encender($marca1);
$marca02=$coche1->encender($marca2);
$marca03=$coche1->encender($marca3);
$marca04=$coche1->encender($marca4);

/**
 * User
 * add
 * update
 * delete
 * select
 * 
 * CRUD
 * CREATE READ UPDATE DELETE
 */

 class user{
    public function add(){

    }
 }


