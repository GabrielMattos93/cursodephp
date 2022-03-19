<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);
//ASSUNTO DA AULA

$nome = "Notebook da Sony"; 
$descricao = "Notebook novo com placa de vídeo nvidia geo force"; 

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)"); 
$stmt->bind_param("ss", $nome, $descricao);  //s = string
$stmt->execute();
$conn->close(); 