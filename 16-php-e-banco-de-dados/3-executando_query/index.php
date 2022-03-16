<?php 

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

$sql = "SELECT * FROM itens"; 
$result = $conn->query($sql); 
print_r($result); 