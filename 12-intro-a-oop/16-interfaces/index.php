<?php

//Dentro da interface declaramos um método

interface Características {

    const nome="Gabriel"; 

    public function falar(); 

}

class Humano implements Características {

    public $idade=28; 
    public function falar() {

        echo"Olá Mundo <br>"; 
    }
    public function dizerNome() {

        echo "Meu nome é ". self::nome ."<br>"; 
    }

}


$gabriel = new Humano; 
$gabriel->falar(); 
$gabriel->dizerNome(); 