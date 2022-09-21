<?php

$o = $_POST['operacao'];
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];

switch ($o){

    case "+":
        echo "$v1 + $v2 = " . ($v1 + $v2);
    break;
    
    case "-":
        echo "$v1 - $v2 = " . ($v1 - $v2);
    break;

    case "*":
        echo "$v1 * $v2 = " . ($v1 * $v2);
    break;

    case "/":
        echo "$v1 / $v2 = " . ($v1 / $v2);
    break;
}

?>