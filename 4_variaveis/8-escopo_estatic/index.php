<?php

function teste () {
	
$a = 0; 
$a++; 

echo"$a <br>"; 	
	
} 

teste ();
teste ();
teste ();

echo"<br>";
// Declarando a funçã com o static


function testeStatic () {
	
 static $a = 0; 
$a++; 

echo"$a <br>"; 	
	
} 

testeStatic ();
testeStatic ();
testeStatic ();