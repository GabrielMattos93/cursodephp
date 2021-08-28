<?php


if(5>2 || 3<4) {     // True e True
	
	echo"Operação 1 é verdadeira<br>"; 
}

if(5>2 || 3>4) {     // True e False           //Ele apresenta a mensagem pois no || apenas 1 dos lados precisa ser verdadeiro para ele apresentar a mensagem, diferente do AND que precisa de ambos os lados verdadeiro
	
	echo"Operação 2 é verdadeira<br>"; 
}

if(7<3 || 3<4) {     // False e True
	
	echo"Operação 3 é verdadeira<br>"; 
}

if(5>20 || 30<4) {    // False e False
	
	echo"A operação 4 é verdadeira"; 
	
}

$a = 10; 
$b = 20; 
$c = 30; 
$d = 40; 

if($a>$b || $c<$d) {
	
	echo "A Operação 5 é verdadeira <br>"; // False e True
 } 
 
 if($a<$b || $c>$d) {   
	
	echo "A Operação 6 é verdadeira <br>"; // True e False
 } 
 
 if($c>$b || $d>$c) {
	 
	
	echo "A Operação 7 é verdadeira <br>"; // True e True
 } 
 
  if($a>$b || $c>$d) {
	 
	
	echo "A Operação 8 é verdadeira <br>"; // True e True
 } 
 
 
 
 
 
 
 
 