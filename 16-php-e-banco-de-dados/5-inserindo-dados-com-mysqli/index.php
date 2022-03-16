<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA
$table = "itens"; 
$nome = "Xícara"; 
$descricao = "É uma xícara de cor rosa"; 

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')"; 
$conn->query($q); 
$conn->close(); 