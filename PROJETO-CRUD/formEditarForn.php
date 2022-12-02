<?php

    include_once "conexao.php";

    $cod_forn = filter_var($_GET['cod_forn'], FILTER_SANITIZE_NUMBER_INT); 
    $consulta = $conectar -> query("SELECT * FROM fornecedor where cod_forn = '$cod_forn'");
    $linha = $consulta -> fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="editarForn.php" method="post">

    Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"/><br>
    Cargo: <input type="text" name="cargo" value="<?php echo $linha['cargo']?>" id="cargo"/><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $linha['endereco']?>" id="endereco"/><br>
    Cidade: <input type="text" name="cidade" value="<?php echo $linha['cidade']?>" id="cidade"/><br>
    CEP: <input type="text" name="cep" value="<?php echo $linha['cep']?>" id="cep"/><br>

    <input type="hidden" name="cod_forn" value="<?php echo $linha['cod_forn']?>">
    <input type="submit" value="Editar">

</form>

</body>
</html>
