<?php

// A ordem de cálculo das expressões é a mesma da matemática

echo 3 + 2*5; //Primeiro ele irá ler a operação de multiplicão depois a adição
echo"<br>"; 
echo(3+2)*5;  //O sistema irá ler o valor em parênteses primeiro e depois calcular o que está fora
echo"<br>"; 
// Ordem dos operadores com variáveis

$a=10; 
$b= 20; 
$c= 5;
$d= $a+$b/$c; 

// O resultado deve está de acordo com as regras da matemática. 

echo"O resultado da operação é $d"; 
echo"<br>"; 