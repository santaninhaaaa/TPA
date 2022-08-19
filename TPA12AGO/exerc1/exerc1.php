<?php

$usuario = $_POST['user'];
$senha = $_POST['password'];

if ($usuario == null || $senha == null) {
    echo "Os campos não podem estar vazios" . "<br>" . "Acesso negado";
}
else if ($usuario == "Etec" && $senha == "Etec062") {
    echo "Bem vindo $usuario" . "<br>" . "Acesso concedido!";
}
else if ($usuario !== "Etec" || $senha !== "Etec062") {
    echo "Usuário ou senha incorretos!" . "<br>" . "Acesso negado!";
}


?>
