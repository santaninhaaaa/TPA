<?php

include_once "conexao.php";

try {

    $cod_func = filter_var($_POST['cod_func'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);
    $update = $conectar -> prepare ("UPDATE funcionario SET nome = :nome, cargo = :cargo WHERE cod_func = :cod_func");
    $update ->bindParam(':cod_func',$cod_func);
    $update ->bindParam(':nome',$nome);
    $update ->bindParam(':cargo',$cargo);
    $update ->execute();

    header("location: homeFunc.php");
} catch(PDOException $e) {
    echo 'Erro: ' . $e -> getMessage();
}

?>