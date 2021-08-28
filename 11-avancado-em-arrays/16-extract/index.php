<?php

$arr=[
    'nome' => 'Gabriel',
    'idade'=>27, 
];

extract($arr); 

echo"$nome<br>";
echo"$idade<br>";

// Outro exemplo com extract

$nome = "Gabriel"; 

$arr2= [
    'nome2' => 'Fred', 
    'idade2' => 37, 
]; 

extract($arr2); 

echo"$nome2<br>";
echo"$idade2<br>";
