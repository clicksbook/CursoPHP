<?php
/**
 * El constructor IF  es una de las caracteristicas mas importantes de muchos lenguajes, 
 * incluido PHP. 
 * 
 * Permite la ejecion condicional de fragmentos de codigo. 
 * 
 * IF es similar a la de C
 */

 $a =20;
 $b = 10;

 if($a > $b){
    echo "$a es mayor que $b";
 }else if($a === $b){
    echo "$a es igual a $b";
 }else {
    echo "$a no es mayor a $b, ni tampoco es igual";
 }