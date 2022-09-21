<?php

$c = $_POST['compra'];
$v1 = ($c * 70) / 100;
$v2 = ($c * 50) / 100;
$v3 = ($c * 40) / 100;
$v4 = ($c * 30) / 100;

if ($c <= 10){
    echo "Valor da venda com lucro de 70%: " . "R$" . ($c - $v1);
}
else if ($c > 10 && $c <= 30){
    echo "Valor da venda com lucro de 50%: " . "R$" . ($c - $v2);
}
else if ($c > 30 &&  $c <= 50){
    echo "Valor da venda com lucro de 40%: " . "R$" . ($c - $v3);
}
else if ($c > 50){
    echo "Valor da venda com lucro de 30%: " . "R$" . ($c - $v4);
}

?>