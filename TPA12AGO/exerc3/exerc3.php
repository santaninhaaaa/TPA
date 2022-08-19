<?php

$n = $_POST['valor'];

if ($n == null) {
    echo "Coloque um valor";
}
else if ($n % 2 == 0) {
    echo "$n é par";
}
else {
    echo "$n é ímpar";
}
?>
