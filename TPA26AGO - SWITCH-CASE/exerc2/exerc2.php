<?php

$n = $_POST['valor'];

switch ($n) {

    case 1:
        echo "<h2> Férias </h2>";
    break;

    case 2:
        echo "<h2> 1º Semestre letivo </h2>";
    break;

    case 3: 
        echo "<h2> 1º Semestre letivo </h2>";
    break;

    case 4:
        echo "<h2> 1º Semestre letivo </h2>";
    break;

    case 5:
        echo "<h2> 1º Semestre letivo </h2>";
    break;

    case 6: 
        echo "<h2> 1º Semestre letivo </h2>";
    break;  
            
    case 7:
        echo "<h2> Recesso </h2>";
    break;

    case 8:
        echo "<h2> 2º Semestre letivo </h2>";
    break;

    case 9: 
        echo "<h2> 2º Semestre letivo </h2>";
    break;

    case 10:
        echo "<h2> 2º Semestre letivo </h2>";
    break;

    case 11:
        echo "<h2> 2º Semestre letivo </h2>";
    break;

    case 12: 
        echo "<h2> Férias </h2>";
    break;  

}

switch ($n == null || $n == " " || $n < 1 || $n > 12) {

    case 13:
        echo "<h2> Coloque um valor de 1 à 12 <h2>";
    default;
    
}

        
?>
