<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

$id = 1; 

$stmt = $conn->prepare("DELETE FROM  itens WHERE id = ?"); 
$stmt->bind_param("i", $id); //i=inteiro
$stmt->execute(); 
$stmt->close(); 