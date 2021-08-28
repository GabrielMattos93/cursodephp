<?php
// Criando um array dinâmico com o array_push

$arr = []; 
for($i = 1; $i <= 10; $i++) {
    array_push($arr, $i); 
}

print_r ($arr);
