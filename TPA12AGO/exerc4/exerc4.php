<?php

$n1 = $_POST['valor1'];
$n2 = $_POST['valor2'];

if ($n1 == null || $n2 == null) {
    echo "Os campos estão vazios";
}
else if ($n1 > $n2) {
    echo "$n1 é maior que $n2";
}
else if ($n1 < $n2) {
    echo "$n1 é menor que $n2";
}
else if ($n1 == $n2 ) {
    echo "$n1 e $n2 são iguais";
}


?>
