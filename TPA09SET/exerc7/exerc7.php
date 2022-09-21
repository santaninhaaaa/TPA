<?php

$n = $_POST['name'];
$i = $_POST['age'];
$s = $_POST['sex'];

if ($i < 25 && $s == "F"){
    echo $n . ", você foi ACEITA!";
}
else {
    echo $n . ", você NÃO foi ACEITO(A)!";
}

?>