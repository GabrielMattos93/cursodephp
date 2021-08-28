<?php

function alteradados ($nome, $idade) {

    $nome = "Sr. $nome"; 
    $idade = "$idade anos"; 

    return [$nome, $idade]; 
}

$dados = alteradados ("Gabriel", 27);
print_r ($dados);
