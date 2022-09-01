<?php

$n = $_POST['valor'];

switch ($n) {

    case 1:
        echo "Inclusão";
    break;

    case 2:
        echo "Exclusão";
    break;

    case 3: 
        echo "Alteração";
    break;

    case 4:
        echo "Consulta";
    break;

    case 5:
        echo "Relatório";
    break;

    default:
        echo "<h2> Opção Inválida <h2>";
    break;
}

?>
