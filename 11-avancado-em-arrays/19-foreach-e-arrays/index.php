<?php

// chave=>valor
// Definimoa informações de 2 jogadores para imprimir na tela.

$fluminense = [
    'Posicão' => 'Defesa', 
    'Nome' => 'Lucas Claro', 
    'Idade'=> 27, 
    'Funcao'=>'Zagueiro', 
]; 
$vasco = [
    'Posicao' => 'Ataque', 
    'Nome' => 'Germán Cano', 
    'Idade'=> 28, 
    'Funcao'=>'Centroavante', 
]; 

foreach($fluminense as $caract=> $value) {
    echo"$caract => $value <br>"; 
}

echo"<br>";

foreach($vasco as $caract=> $value) {
    echo"$caract => $value <br>"; 
}