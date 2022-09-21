<?php

$v = $_POST['compra'];
$cp1 = ($v * 45) / 100;
$cp2 = ($v * 30) / 100;

if ($v < 20) {
    echo "Valor da compra com lucro de 45%: " . "R$" . $cp1;
}
else {
    echo "Valor da compra com lucro de 30%: " . "R$" . $cp2;
}

?>