<?php

include_once "conexao.php";

try {

    $cod_forn = filter_var($_GET['cod_forn'], FILTER_SANITIZE_NUMBER_INT);

    $delete = $conectar -> prepare ("DELETE FROM fornecedor WHERE cod_forn = :cod_forn");
    $delete ->bindParam(':cod_forn',$cod_forn);
    $delete ->execute();

    header("location: homeForn.php");
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}

?>