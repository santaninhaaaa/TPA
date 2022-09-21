<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4 && $n1 > $n5) {
    echo $n1 . " é maior que $n2, $n3, $n4 e $n5";
}
else if ($n2 > $n1 && $n2 > $n3 && $n2 > $n4 && $n2 > $n5) {
    echo $n2 . " é maior que $n1, $n3, $n4 e $n5";
}
else if ($n3 > $n1 && $n3 > $n2 && $n3 > $n4 && $n3 > $n5) {
    echo $n3 . " é maior que $n1, $n2, $n4 e $n5";
}
else if ($n4 > $n1 && $n4 > $n2 && $n4 > $n3 && $n4 > $n5) {
    echo $n4 . " é maior que $n1, $n2, $n3 e $n5";
}
else if ($n5 > $n1 && $n5 > $n2 && $n5 > $n3 && $n5 > $n4) {
    echo $n5 . " é maior que $n1, $n2, $n3 e $n4";
}

if ($n1 < $n2 && $n1 < $n3 && $n1 < $n4 && $n1 < $n5) {
    echo " e " . $n1 . " é menor que $n2, $n3, $n4 e $n5";
}
else if ($n2 < $n1 && $n2 < $n3 && $n2 < $n4 && $n2 < $n5) {
    echo " e " . $n2 . " é menor que $n1, $n3, $n4 e $n5";
}
else if ($n3 < $n1 && $n3 < $n2 && $n3 < $n4 && $n3 < $n5) {
    echo " e " . $n3 . " é menor que $n1, $n2, $n4 e $n5";
}
else if ($n4 < $n1 && $n4 < $n2 && $n4 < $n3 && $n4 < $n5) {
    echo " e " . $n4 . " é menor que $n1, $n2, $n3 e $n5";
}
else if ($n5 < $n1 && $n5 < $n2 && $n5 < $n3 && $n5 < $n4) {
    echo " e " . $n5 . " é menor que $n1, $n2, $n3 e $n4";
}

?>