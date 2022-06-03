<?php

$litros = 15;
$combus = "A";
$precos = 0;
$valor = 0;

if ($combus == "A"){
    $precos = $litros * 2;

if ($litros <= 50){
     $valor = $precos - 5/100;
}
else ($litros > 50){
     $valor = $precos - 10/100;
}}

if ($combus == "G"){
    $precos = $litros * 3.5;

if ($litros <= 30){
    $valor = $precos - 8/100;
} 
else ($litros > 30){
    $valor = $precos - 9/100;
}}

if ($combus == "D"){
    $precos = $litros * 5;

if ($litros <= 100){
    $valor = $precos - 20/100;
} 
else ($litros > 100){
    $valor = $precos - 22/100;
}}

echo "O valor a ser pago pelo cliente é R$" . $valor;

?>