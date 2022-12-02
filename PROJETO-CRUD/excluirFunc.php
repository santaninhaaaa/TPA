<?php

include_once "conexao.php";

try {

    $cod_func = filter_var($_GET['cod_func'], FILTER_SANITIZE_NUMBER_INT);

    $delete = $conectar -> prepare ("DELETE FROM funcionario WHERE cod_func = :cod_func");
    $delete ->bindParam(':cod_func',$cod_func);
    $delete ->execute();

    header("location: homeFunc.php");
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}

?>