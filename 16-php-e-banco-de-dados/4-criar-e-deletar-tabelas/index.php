<?php

$host = "localhost";
$user = "root"; 
$dbname = "cursophp"; 
$password = "";   

$conn = new mysqli($host, $user, $password, $dbname);

//ASSUNTO DA AULA

//$q = "CREATE TABLE fluminense (nome VARCHAR(100), idade VARCHAR (3), detalhes text)";

$q = "DROP TABLE fluminense"; 

$conn->query($q); 
$conn->close(); 