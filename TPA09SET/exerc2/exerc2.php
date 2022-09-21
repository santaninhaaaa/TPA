<?php

$n = $_POST['num'];

switch ($n%2 == 0 && $n%5 == 0 && $n%10 == 0) {

    case 1:
        echo "$n é divisível por 2, 5 e 10";
    break;

    default:
        echo "$n não é divisível por 2, 5 e 10";
    break;
}

?>