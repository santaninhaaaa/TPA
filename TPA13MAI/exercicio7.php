<?php
$hr = 8;
$salarhr = 55;
$depend = 30;
$inss = 0;
$imprenda = 0;
//Resposta deu R$1940
$salarbruto = $hr * $salarhr + (50 * $depend);

if ($salarbruto <= 1212){
    echo "Desconto do INSS é R$ " . $inss = $salarbruto * 0.075;
} else if ($salarbruto >= 1212.01 && $salarbruto <= 2427.35){
    echo "Desconto do INSS é R$ " . $inss = $salarbruto * 0.09 - 18.18;
} else if ($salarbruto >= 2427.36 && $salarbruto <= 3641.03){
    echo "Desconto do INSS é R$ " . $inss = $salarbruto * 0.12 - 91;
} else if ($salarbruto >= 3641.04 && $salarbruto <= 7087.22){
    echo "Desconto do INSS é R$ " . $inss = $salarbruto * 0.14 - 163.82;
} 
?>

<br>

<?php

if ($salarbruto <= 1903.98){
    echo "Desconto do IR é R$ " . $imprenda = $salarbruto;
} else if ($salarbruto >= 1903.99 && $salarbruto <= 2826.65){
    echo "Desconto do IR é R$ " . $imprende = $salarbruto * 0.075 - 142.8;
} else if ($salarbruto >= 2826.66 && $salarbruto <= 3751.05){
    echo "Desconto do IR é R$ " . $imprenda = $salarbruto * 0.15 - 354.8;
} else if ($salarbruto >= 3751.06 && $salarbruto <= 4664.68){
    echo "Desconto do IR é R$ " . $imprenda = $salarbruto * 0.225 - 636.13;
} else if ($salarbruto >= 4664.68){
    echo "Desconto do IR é R$ " . $imprenda = $salarbruto * 0.275 - 869.36;
}

?>

<br>

<?php

$salarliquido = $salarbruto - $inss - $imprenda;

echo "Salário líquido é igual a R$ " . $salarliquido

?>