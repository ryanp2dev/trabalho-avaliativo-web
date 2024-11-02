<?php 
$endereco = 'localhost';
$banco = 'lanchonete';
$usuario = 'postgres';
$senha = 'root';
$porta = 5432;
$pdo = new PDO("pgsql:host=$endereco;dbname=$banco;port=$porta", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  






