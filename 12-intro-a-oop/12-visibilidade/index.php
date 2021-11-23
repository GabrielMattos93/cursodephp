<?php

class Carro{

    protected $rodas = 4; 
    public $vidro ="Sem Película"; 
}

class Mecanico {

    public function alterarRodas($obj) {
        $obj->rodas - 10; 
    }
    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro=$pelicula; 
    }
}

$carro = new Carro; 

echo $carro->rodas . "<br>"; 

$gabriel = new Mecanico; 

$gabriel->alterarRodas($carro); 

echo $carro->rodas . "<br>"; 

$gabriel->colocarPelicula($carro, "G20");