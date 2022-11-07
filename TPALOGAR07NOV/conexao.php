<?php

try{
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;","root","");
    //echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Falha ao conectar com o banco de dados: " . $e->getMessage();
}

?>