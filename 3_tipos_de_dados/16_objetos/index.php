<?php

// Crie uma classe que imprima a característica de uma pessoa.

class Pessoa {
function falar() {
echo"Olá, mundo"; 

}	
	
}

$gabriel = new Pessoa();
$gabriel ->nome = "Gabriel Mattos";  
echo$gabriel->nome; 
echo"<br>"; 
$gabriel->falar(); 


