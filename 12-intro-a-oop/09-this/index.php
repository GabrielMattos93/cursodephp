<?php

class Animal {

    public $nome; 

    function EscolherNome($nome) {
        $this->nome = $nome; 
    }
}

function latir() {
    return "au au<br>"; 
}

function latirForte() {
    return strtoupper($this->latir()); 
}


$frida = new Animal; 

echo"O nome do animal é: $frida->nome<br>"; 

$frida ->EscolherNome("Frida"); 

echo"O nome do animal é: $frida->nome<br>"; 