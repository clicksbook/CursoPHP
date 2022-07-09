<?php
/**
 * Operadores de Incremento
 
 ++$a   pre-incremento      incrementa $a en uno, y luego retorna $a
$b++    post-incremento     Retorna $a, y luego incrementa $a en uno
--$a    pre-decremento      decremena $a en uno, luego retorna $a
$b--    post-decremento     retorna $b, luego decrementa $b en uno
 */

 $a = 5;
 echo "Debe de ser 6: ". ++$a.'<br>';
 echo "Debe de ser 6:". $a.'<br>';


 $b = 10;
 echo "Debe ser 5:" .$b++.'<br>';
 echo "Debe ser 6:" .$b.'<br>';

 $a = 5;
 echo "Debe de ser 4: ". --$a.'<br>';
 echo "Debe de ser 4:". $a.'<br>';

 $b = 10;
 echo "Debe ser 10:" .$b--.'<br>';
 echo "Debe ser 9:" .$b.'<br>';