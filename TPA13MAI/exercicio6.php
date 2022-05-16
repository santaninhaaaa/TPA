<?php
$pes = 55.9;
$alt = 1.71;
$imc = $pes / ($alt * $alt);

if ($imc <= 18.5){
    echo "Abaixo do peso";
} else if ($imc >= 18.6 && $imc <= 24.9){
    echo "Peso ideal (parabéns)";
} else if ($imc >= 25 && $imc <= 29.9){
    echo "Levemente acima do peso";
} else if ($imc >= 30 && $imc <= 34.9){
    echo "Obesidade grau I";
} else if ($imc >= 35 && $imc <= 39.9){
    echo "Obesidade grau II (severa)";
} else if ($imc >= 40){
    echo "Obesidade III (mórbida)";
}

?>