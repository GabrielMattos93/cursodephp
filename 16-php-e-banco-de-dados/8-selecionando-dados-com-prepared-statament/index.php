<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

$id = 4; 

$stmt = $conn->prepare("SELECT * FROM  itens WHERE id > ?"); 
$stmt->bind_param("i", $id);  //i=interger
$stmt->execute(); 


$result = $stmt->get_result(); 
$data = $result->fetch_all(); 
print_r($data); 