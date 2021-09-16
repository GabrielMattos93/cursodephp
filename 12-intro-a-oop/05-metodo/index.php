<?php

class Pessoa{ 

    function falar() {
        echo"Olá eu sou um objeto <br>"; 
    }
    function somar ($x, $y) {
        echo $x + $y . "<br>"; 
    }
}

$gabriel = new Pessoa; 
$maria = new Pessoa; 

// Método de Falar do Gabriel 
// Método de Falar da Maria

$gabriel -> falar(); 
$maria -> falar(); 

$gabriel -> somar(2, 2); 
$maria -> somar(235, 45); 