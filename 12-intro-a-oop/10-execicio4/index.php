<?php 

class Carro {

    public $cor; 
    public $tetoSolar;
    public $VelocidadeMaxima; 

    function setVelocidadeMaxima($vel) {
        $this->VelocidadeMaxima - $vel;
    }

    function getVelocidadeMaxima() {
        echo"A Velocidade Máxima deste carro é: $this->VelocidadeMaxima Km/h<br>"; 
    }
}

$bmw = new Carro; 

$bmw->cor = "Branco";
$bmw->tetoSolar = true; 

$bmw->setVelocidadeMaxima(300);

$bmw->getVelocidadeMaxima(); 
