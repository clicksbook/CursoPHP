<?php
/**
 * Require es identico a include excepto que en caso de fallo producira un error fatal
 * de nivel E_COMPILE_ERROR
 * 
 * 
 * La sentensia require_one es identica a require excepto que php verificara si el archivo 
 * ya a sido incluido y si es asi, no se incluye
 */


 require("campo_a_requerir.php");
 //require_once("campo_a_requerir.php");
 echo $nombre;