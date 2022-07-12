<?php
/**
 * El significado de una sentencia While es simple, le dice a php que ejecuque
 * la sentencia anidadas, ranto como expresion while se evalue como true. El valor de la
 * expresion es verificado cada vez que inicie el bucle.
 */

 $i =1;
 while($i <= 10){
    echo $i++.'<br>';
    /**
     * El valor presentado seria $i antes del incremento
     */
 }

 