<?php

/*
    $n < 16 = não eleitor (0 a 15)
    $n >= 18 e <=  65 = eleitor obrigatório (18 a 65)
    $n >= 16 e <  18 E > 65 = eleitor facultativo (16, 17 e 66 pra cima)

*/

$n = $_POST['num'];

if ($n < 16){
    echo "Não eleitor";
}
else if ($n >= 18 && $n <= 65){
    echo "Eleitor obrigatório";
}
else if ($n >= 16 || $n < 18 || $n > 65){
    echo "Eleitor facultativo";
}

?>