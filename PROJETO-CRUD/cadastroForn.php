<?php

include_once "conexao.php";

try{
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);
    $endereco = filter_var($_POST['endereco']);
    $cidade = filter_var($_POST['cidade']);
    $cep = filter_var($_POST['cep']);

    $insert = $conectar -> prepare ("INSERT INTO fornecedor (nome, cargo, endereco, cidade, cep) VALUES(:nome, :cargo, :endereco, :cidade, :cep)");
    $insert -> bindParam(':nome',$nome);
    $insert -> bindParam(':cargo',$cargo);
    $insert -> bindParam(':endereco',$endereco);
    $insert -> bindParam(':cidade',$cidade);
    $insert -> bindParam(':cep',$cep);
    $insert -> execute();

    header("location: homeForn.php");

} catch (PDOException $e){
    echo 'Erro: ' . $e->getMessage();
}

?>