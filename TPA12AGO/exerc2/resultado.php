<?php

$idade = $_POST['age'];

if ($idade < 18) {
    echo "Você é de menor";
}
else if ($idade >= 18) {
    echo "Você é de maior";
}
else if ($idade == null) {
    echo "Coloque um valor";
}


?>
