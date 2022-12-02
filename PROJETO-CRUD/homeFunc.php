<?php

include_once "conexao.php";

try{
    $consulta = $conectar -> query("SELECT * FROM funcionario");
    echo "<a href='index.html'>HOME</a> <br> <a href='formFunc.php'>Novo Cadastro</a><br><br><h1>Listagem de Usuários</h1>";
    echo "<table border='1'<tr><td>Nome</td><td>Cargo</td><td>Ações</td></tr>";
    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$linha[nome]</td><td>$linha[cargo]</td><td><a href='formEditarFunc.php?cod_func=$linha[cod_func]'>Editar</a> - <a href='excluirFunc.php?cod_func=$linha[cod_func]'> Excluir</a></td></tr>";
    }
    echo "</table>";
    echo $consulta->rowCount() . " Registros Exibidos";
} catch (PDOException $e){
    echo $e->getMessage();
}

?>