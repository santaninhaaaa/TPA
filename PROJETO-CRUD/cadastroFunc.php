<?php

include_once "conexao.php";

try{
    $nome = filter_var($_POST['nome']);
    $cargo = filter_var($_POST['cargo']);

    $insert = $conectar -> prepare ("INSERT INTO funcionario (nome, cargo) VALUES(:nome, :cargo)");
    $insert -> bindParam(':nome',$nome);
    $insert -> bindParam(':cargo',$cargo);
    $insert -> execute();

    header("location: homeFunc.php");

} catch (PDOException $e){
    echo 'Erro: ' . $e->getMessage();
}

?>