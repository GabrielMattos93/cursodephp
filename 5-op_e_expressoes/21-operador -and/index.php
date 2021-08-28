<?php

if(5>10 && 10>5 ) {
	
echo"Entrou no if 1 <br>";  // False e true
	
}

if(50>10 && 10>5 ) {
	
echo"Entrou no if 2<br>";  // true  e true
	
}

if(5>10 && 10>500 ) {
	
echo"Entrou no if 3<br>";  // true e false
	
}

if(50>100 && 10>500 ) {
	
echo"Entrou no if 4<br>";  // False e False
	
}

$a = 10; 
$b = 5; 
$c = 12; 
$d = 12; 

if($a > $b && $c = $d) {                      // true e true
	
	echo"Entrou no if 5<br>"; 
}

if($c > $b && $d < $a) {                      // true e false
	
	echo"Entrou no if 6<br>"; 
}