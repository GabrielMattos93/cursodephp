<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

$id = 10; 

$stmt =$conn->prepare("UPDATE itens SET nome= ?, descricao = ? WHERE id = ?"); 

$nome = "Sofá"; 
$descricao = "Sofá de 6 lados"; 

$stmt->bind_param("ssi", $nome, $descricao , $id); //ss =string i = inteiro
$stmt->execute(); 

if($stmt->error){
    echo "Erro: " . $stmt->error; 
}