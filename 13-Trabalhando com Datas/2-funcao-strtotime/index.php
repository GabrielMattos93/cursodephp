<?php 

// Recebendo uma string como parâmetro

$cincodias = strtotime("5 Days"); 

echo $cincodias . "<br>"; 

//10 Dias

$dezdias = strtotime("10 Days"); 

echo $dezdias . "<br>";

//Data atual + 5 

$dataatual = date('d/m/y', $cincodias); 

echo $dataatual; 
