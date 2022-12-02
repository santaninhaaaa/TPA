<?php

include_once "conexao.php";

try {

    $cod_forn = filter_var($_POST['cod_forn'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);
    $endereco = filter_var($_POST['endereco']);
    $cidade = filter_var($_POST['cidade']);
    $cep = filter_var($_POST['cep']);

    $update = $conectar -> prepare ("UPDATE fornecedor SET nome = :nome, cargo = :cargo, endereco = :endereco, cidade = :cidade, cep = :cep WHERE cod_forn = :cod_forn");
    $update ->bindParam(':cod_forn',$cod_forn);
    $update ->bindParam(':nome',$nome);
    $update ->bindParam(':cargo',$cargo);
    $update -> bindParam(':endereco',$endereco);
    $update -> bindParam(':cidade',$cidade);
    $update -> bindParam(':cep',$cep);
    $update ->execute();

    header("location: homeForn.php");
} catch(PDOException $e) {
    echo 'Erro: ' . $e -> getMessage();
}

?>