<?php 

$host = "localhost";
$user = "root"; 
$dbname = "cursoph"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_errno){
    echo "Erro: A conexão com o banco de dados não foi realizada<br>"; 
    echo "Erro:" . mysqli_connect_error(); 
}

// Forma Orientada a Objetos


$host = "localhost";
$user = "root"; 
$dbname = "cursoph"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_errno){
    echo "Erro: A conexão com o banco de dados não foi realizada<br>"; 
    echo "Erro:" . $conn->connect_errno; 
}
