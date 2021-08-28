<?php

//Características de uma pessoa

$nome = "Gabriel"; 
$idade = 27; 
$trabalhando = true; 
$profissão = "Programador"; 

//Como argumento vou usar o nome das variáveis

$pessoa = compact("nome", "idade", "trabalhando", "profissão"); 

print_r($pessoa); 
echo"<br>";