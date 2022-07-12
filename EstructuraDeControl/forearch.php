<?php
/**
 * El constructor foreach proporciona un modo sencillo de iterar sobre arrays
 */

 $datos =[
    "nombre"=>"Jose",
    "Apellido"=>"Ramirez",
    "Edad"=>10
 ];

foreach($datos AS $row=>$list){
    echo $list.'<br>';
}