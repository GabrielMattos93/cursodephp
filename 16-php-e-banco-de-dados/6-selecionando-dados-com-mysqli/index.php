<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

$q = "SELECT * FROM itens"; 
$result= $conn->query($q);
$q = $conn->close(); 

//UM RESULTADO

$item  = $result->fetch_assoc(); 

print_r($item);

//TODOS OS RESULTADOS

$itens  = $result->fetch_all(); 
print_r($itens);