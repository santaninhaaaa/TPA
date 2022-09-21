<?php

$n = $_POST['name'];
$i = $_POST['age'];

if ($i < 10){
    echo $n . ", você deverá pagar R$30,00";
}
else if ($i >= 10 && $i < 29){
    echo $n . ", você deverá pagar R$60,00";
}
else if ($i >= 29 && $i < 45){
    echo $n . ", você deverá pagar R$120,00";
}
else if ($i >= 45 && $i < 59){
    echo $n . ", você deverá pagar R$150,00";
}
else if ($i >= 59 && $i < 65){
    echo $n . ", você deverá pagar R$250,00";
}
else if ($i >= 65){
    echo $n . ", você deverá pagar R$400,00";
}

?>