<?php
/**
 * La sentencia switch es similar a la sentencia if en la misma expresion
 */
//activo == 1
//Inactivo == 2
//Bloqueado == 3
//Desactivo == 4


$i = 1;
switch($i){
    case 1:
        $status = 'Activo';
        break;
    case 2:
        $status = "Inactivo";
        break;
    case 3:
        $status = "Bloqueado";
        break;
    case 4:
        $status = "Desactivado";
}


echo $status;
