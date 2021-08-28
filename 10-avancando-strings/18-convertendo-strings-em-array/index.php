<?php

$frase = "Testando o método explode"; 

$array = explode(" ", $frase ); 

print_r($array); 

echo"<br>"; 

$frase2 = "Avião, Carro, Navio, Casa"; 

$estrutura2 =explode(" ", $frase2); 

print_r($estrutura2); 

echo"<br>"; 

//Ultilizando no loop

for($i = 0; $i < count($estrutura2); $i++
 ){

    echo"$frase2[$i] <br>"; 
}