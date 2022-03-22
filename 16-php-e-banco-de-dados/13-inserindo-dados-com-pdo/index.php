<?php 

$host = "localhost"; 
$db = "cursophp"; 
$user="root"; 
$pass = "";

$conn = new PDO("mysql:host = $host; dbname=$db", $user, $pass); 

//ASSUNTO DA AULA

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)"); 

$nome  = "Celular da Samsung"; 
$descricao = "O Celular é um A7 da Samsung"; 

$stmt->bindParam(":nome", $nome); 
$stmt->bindParam(":descricao", $descricao); 

$stmt->execute(); 