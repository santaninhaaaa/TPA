<?php

$matr = $_POST['matricula'];
$nome = $_POST['name'];
$mate = $_POST['materia'];

switch ($mate) {

    case 1:
        echo "Matrícula " . $matr . ", " . $nome . ". Matriculado em Matemática";
    break;

    case 2:
        echo "Matrícula " . $matr . ", " . $nome . ". Matriculado em Liguagem de Programação";
    break;

    case 3: 
        echo "Matrícula " . $matr . ", " . $nome . ". Matriculado em Português";
    break;

    case 4:
        echo "Matrícula " . $matr . ", " . $nome . ". Matriculado em Inglês";
    break;

    default:
        echo "<h2> Número de Matéria Inválido <h2>";
    break;
    
}
?>
