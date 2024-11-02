<?php 

require_once "src/conecao.php";

$sql = "select * from produtos";
    
// $stmt = $conexao->prepare($sql);
// // executar a SQL
// $stmt->execute();
// $lanches = $stmt->fetchAll(PDO::FETCH_ASSOC);  


$statement = $pdo->query($sql);

$lanches = $statement->fetchAll(PDO::FETCH_ASSOC);
