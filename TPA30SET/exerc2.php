<?php

$inicio=$_POST['v1'];
$fim=$_POST['v2'];

if ($inicio > $fim){
    $v = $inicio;
    $inicio = $fim;
    $fim = $v;
}
while($inicio <= $fim){
    echo $inicio . "<br>";
    $inicio++;
}