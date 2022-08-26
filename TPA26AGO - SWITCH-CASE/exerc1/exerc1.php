<?php

$n = $_POST['valor'];

switch ($n == null || $n > 12 || $n < 1) {
    echo "Coloque um valor entre 1 e 12";

case 1:
    echo "O mês atual é Janeiro";
break;

case 2:
    echo "O mês atual é Fevereiro";
break;

case: 3 {
    echo "O mês atual é Março";
}
case: 4 {
    echo "O mês atual é Abril";
}
case: 5 {
    echo "O mês atual é Maio";
}
case: 6 {
    echo "O mês atual é Junho";
}
case: 7 {
    echo "O mês atual é Julho";
}
case: 8) {
    echo "O mês atual é Agosto";
}
case: 9) {
    echo "O mês atual é Setembro";
}
case: 10) {
    echo "O mês atual é Outubro";
}
case: 11) {
    echo "O mês atual é Novembro";
}
case: 1case: 2) {
    echo "O mês atual é Dezembro";
}