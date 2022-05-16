<?php
$hr = 8.5;
$salarhr = 55;
$depend = 30;

$salarbruto = $hr * $salarhr + (50 * $depend);

if ($salarbruto <= 1212){
    echo $salarbruto * 0.075;
} else if ($salarbruto >= 1212.01 && $salarbruto <= 2427.35){
    echo $salarbruto * 0.09 - 18.18;
} else if ($salarbruto >= 2427.36 && $salarbruto <= 3641.03){
    echo $salarbruto * 0.12 - 91;
} else if ($salarbruto >= 3641.04 && $salarbruto <= 7087.22){
    echo $salarbruto * 0.14 - 163.82;
}
