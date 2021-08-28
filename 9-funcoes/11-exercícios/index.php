<?php

function definecorcarro($cor = "Vermelho") {
    
    return "A cor do carro é: $cor"; 
}

$carrovermelho= definecorcarro(); 
echo $carrovermelho . "<br>"; 

$carroazul= definecorcarro("Azul"); 
echo $carroazul . "<br>"; 