<?php

include_once "conexao.php";

try{
    $consulta = $conectar -> query("SELECT * FROM fornecedor");
    echo "<a href='index.html'>HOME</a> <br> <a href='formForn.php'>Novo Cadastro</a><br><br><h1>Listagem de Usuários</h1>";
    echo "<table border='1'<tr><td>Nome</td><td>Cargo</td><td>Endereço</td><td>Cidade</td><td>CEP</td><td>Ações</td></tr>";
    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$linha[nome]</td><td>$linha[cargo]</td><td>$linha[endereco]</td><td>$linha[cidade]</td><td>$linha[cep]</td><td><a href='formEditarForn.php?cod_forn=$linha[cod_forn]'>Editar</a> - <a href='excluirForn.php?cod_forn=$linha[cod_forn]'> Excluir</a></td></tr>";
    }
    echo "</table>";
    echo $consulta->rowCount() . " Registros Exibidos";
} catch (PDOException $e){
    echo $e->getMessage();
}

?>