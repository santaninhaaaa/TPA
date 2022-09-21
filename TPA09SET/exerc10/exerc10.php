<?php

$v = $_POST['valor'];
$c = $_POST['codigo'];

$a1 = $v + ($v * 15) / 100;
$a2 = $v + ($v * 20) / 100;
$a3 = $v + ($v * 35) / 100;
$a4 = $v + ($v * 40) / 100;

switch ($c){

    case 1:
        echo "Aumento de 15%: " . "R$" . $a1;
    break;

    case 3:
        echo "Aumento de 20%: " . "R$" . $a2;
    break;

    case 4:
        echo "Aumento de 35%: " . "R$" . $a3;
    break;

    case 8:
        echo "Aumento de 40%: " . "R$" . $a4;
    break;

    default:
        echo "Coloque um código";
    break;
}

?>