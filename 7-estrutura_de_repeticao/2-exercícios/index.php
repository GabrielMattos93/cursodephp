<?php

// Estrutura de repetição que imprime apenas strings

$arr = [5, "Gabriel", true, false, "Opa", 12.8, "teste", true, [], "palavra", 5, 10, "olá"]; 

$x = count($arr); 
$y = 0; 


while ($y<$x){ 

if(is_string($arr[$y])) {
  echo $arr[$y] . "<br>"; 
}

$y++;

} 