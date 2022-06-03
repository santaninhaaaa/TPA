<?php
$salarioatual = 1300;
$novosalarios = 0;
$aumento = 0;

echo "O salário antes do reajuste é de R$" . $salarioatual;

?>

<br>

<?php

if ($salarioatual <= 280){
    echo "Aumento de 20%";
} 
else if ($salarioatual > 280 && $salarioatual <= 700){
    echo "Aumento de 15%";
} 
else if ($salarioatual > 700 && $salarioatual <= 1500){
    echo "Aumento de 10%";
} 
else if ($salarioatual > 1500){
    echo "Aumento de 5%";
}

?>

<br>

<?php

if ($salarioatual <= 280){
    echo "Valor do aumento de R$" . $aumento = ($salarioatual * 20) / 100;
} 
else if ($salarioatual > 280 && $salarioatual <= 700){
    echo "Valor do aumento de R$" . $aumento = ($salarioatual * 15) / 100;
} 
else if ($salarioatual > 700 && $salarioatual <= 1500){
    echo "Valor do aumento de R$" . $aumento = ($salarioatual * 10) / 100;
} 
else if ($salarioatual > 1500){
    echo "Valor do aumento de R$" . $aumento = ($salarioatual * 5) / 100;
}

?>

<br>

<?php

echo "O novo salário, após o aumento é de R$" . $salarioatual + $aumento;