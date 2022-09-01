<?php

$n = $_POST['valor'];

switch ($n) {

    case 1:
        echo "O mês atual é Janeiro";
    break;

    case 2:
        echo "O mês atual é Fevereiro";
    break;

    case 3: 
        echo "O mês atual é Março";
    break;

    case 4:
        echo "O mês atual é Abril";
    break;

    case 5:
        echo "O mês atual é Maio";
    break;

    case 6: 
        echo "O mês atual é Junho";
    break;  
            
    case 7:
        echo "O mês atual é Julho";
    break;

    case 8:
        echo "O mês atual é Agosto";
    break;

    case 9: 
        echo "O mês atual é Setembro";
    break;

    case 10:
        echo "O mês atual é Outubro";
    break;

    case 11:
        echo "O mês atual é Novembro";
    break;

    case 12: 
        echo "O mês atual é Dezembro";
    break;  

    default:
        echo "Coloque um valor de 1 à 12";
    break;

}

        
?>
