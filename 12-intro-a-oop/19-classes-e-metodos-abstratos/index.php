<?php

abstract class Teste{

    public static function testandoClasse() {

        echo"Este é um método de uma classe abstrata"; 
    }

    abstract public function testeabs(); 
}

// Não podemos instanciar um método de uma classe abstrata.
//$gabriel = new Teste; 
//$gabriel->Teste(); 


Teste::testandoClasse(); 

class Nova extends Teste{

    public function testeabs() {

        echo"Teste o método abstrato <br>";
    }

}

$abc = new Nova;  