<?php

$jogador = "Frederico Chaves"; 
$idade = 37; 
$peso = "76.6 kg"; 
$altura = 1.78;
$posicao = "Centroavante"; 

$fluminense = compact("jogador", "idade", "peso", "altura", "posicao"); 

print_r($fluminense); 
echo"<br>"; 

foreach($fluminense as $caracteristicas => $value){

    echo"$caracteristicas=> $value <br>"; //interpolação 
}
