<?php

class Cachorro {

    function latir () {

        echo"AU AU <br>"; 
    }

    function andar($n) {

        echo"O cachorro andou $n metros<br>"; 
    }
}

$viraLata = new Cachorro; 
$pitbul = new Cachorro; 

$viraLata->latir(); 
$pitbul->latir();

//Andou

$viraLata->andar(100); 
$pitbul->andar(200);