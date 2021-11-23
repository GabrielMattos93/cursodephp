<?php

class Humano {

    public const OLHOS = 2; 
    public const BRAÇOS= 2; 
    public const PERNAS=2; 

    function mostrarConstante() {

        echo self:: BRAÇOS . "<br>";
    }
}

$gabriel = new Humano; 

echo $gabriel::OLHOS . "<br>"; 

$gabriel->mostrarConstante(); 