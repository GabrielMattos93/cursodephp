<?php
// Criando um array de 10 a 20 e fazendo um loop em cima de um array dinâmico. 
// Imprimir apenas valores ímpares


$arr = []; 
for($i = 10; $i <= 20; $i++) {
    array_push($arr, $i); 
}
print_r($arr); 

//Agora faremos o loop 

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] % 2 != 0) {
        echo"Número ímpar: $arr[$i] <br>"; 
    }
}

