<?php
/*
$numero = 5;
$multi = 5;

while($numero ){
    $final = $numero * $multi;
    echo $final;
    $multi--;
}
*/

/*
$numero = 5;

while($numero >= 1){
    echo $numero * $numero-- . " ";
    $numero--;
}
*/

/*
$numero = 5;

while($numero >= 1){
    echo $numero *= $numero;
    $numero--;
}
*/

$numero = 6;
$total= 1;
$contar= 1;

while ($contar <= $numero){
    $total *= $contar;
    $contar++;
}

echo $total;
?>