<?php

$idade = $_POST['age'];

if ($idade == null) {
    echo "Coloque uma idade";
}
else if ($idade < 0 || $idade > 120) {
    echo "Coloque uma idade válida";
}
else if ($idade < 18 && $idade > 0) {
    echo "Você é de menor";
}
else if ($idade >= 18) {
    echo "Você é de maior";
}


?>
