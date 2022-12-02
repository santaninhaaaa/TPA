<?php

    include_once "conexao.php";

    $cod_func = filter_var($_GET['cod_func'], FILTER_SANITIZE_NUMBER_INT); 
    $consulta = $conectar -> query("SELECT * FROM funcionario where cod_func = '$cod_func'");
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
    
<form action="editarFunc.php" method="post">

    Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"/><br>
    Cargo: <input type="text" name="cargo" value="<?php echo $linha['cargo']?>" id="cargo"/><br>

    <input type="hidden" name="cod_func" value="<?php echo $linha['cod_func']?>">
    <input type="submit" value="Editar">

</form>

</body>
</html>
