<?php

$n = $_POST['num'];

if ($n % 2 == 0 && $n % 5 == 0 && $n % 10 == 0) {
    echo $n . " é divisível por 2, 5 e 10";
}
else if ($n % 2 == 0 && $n % 5 == 0) {
    echo $n . " é divisível por 2 e por 10";
}
else if ($n % 2 == 0 && $n % 10 == 0) {
    echo $n . " é divisível por 2 e por 10";
}
else if ($n % 5 == 0 && $n % 10 == 0) {
    echo $n . " é divisível por 5 e por 10";
}
else if ($n % 2 == 0) {
    echo $n . " é divisível apenas por 2";
}
else if ($n % 5 == 0) {
    echo $n . " é divisível apenas por 5";
}
else if ($n % 10 == 0) {
    echo $n . " é apenas divisível por 10";
}
else {
    echo $n . " não é divisível por 2, ou 5 ou 10";
}
?>