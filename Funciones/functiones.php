<?php
/**
 * Una funcion puede ser definida empleando una sintaxis como la siguiente
 */
//Funcion sin parametros


function get(){
    echo "Esto es una funcion sin parametros";
}

get();

echo '<br>';

function getName($name){
    echo "Tu nombre es $name";
}

getName("Ronald");

echo '<br>';

function suma($valor1, $valor2){
    echo "El resultado de $valor1+$valor2 es: ".$valor1+$valor2;
}

suma(5,10);

echo '<br>';

echo '<br>';
function getMultiplicacion($numero1,$numero2){
     return $numero1*$numero2;
}

echo getMultiplicacion(5,5);