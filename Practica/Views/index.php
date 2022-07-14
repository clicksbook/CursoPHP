<?php
require_once("../Controllers/ctrUser.php");
require_once("../Models/mdlUser.php");
$datos = [
    "name"=>"Pedro",
    "email"=>"pedro@gmail.com"
];

echo ctrUser::addUser($datos);
