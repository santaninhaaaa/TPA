<?php 
$l1 = 450;
$l2 = 15;
$l3 = 15;

if ($l1 == $l2 && $l2 == $l3){
    echo "Equilátero";
}
else if ($l1 == $l2 || $l1 == $l3 || $l2 == $l3){
    echo "Isósceles";
}
else if ($l1 != $l2 && $l1 != $l3 && $l2 != $l3){
    echo "Escaleno";
}
else if ( ($l1 + $l2 > $l3) && ($l1 + $l3 > $l2) && ($l2 + $l3 > $l1) ){
   echo "Não é um triângulo";
}
 ?>