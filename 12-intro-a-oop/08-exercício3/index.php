<?php

class Pessoa {

    public $nome; 
    public $idade; 
    public $cargo; 

    function andar($m) {
        echo"A Pessoa andou $m metros <br>"; 
    }
}

$gabriel = new Pessoa;

$gabriel->nome = "Gabriel"; 
$gabriel->idade = 27;

echo "O nome dele é $gabriel->nome e tem $gabriel->idade anos <br>"; 

$gabriel->andar(300);





