<?php

class Car{

    public $porta; 
    public $cor; 
    public $marca; 

    function __construct($porta,$cor, $marca) {

        $this->porta=$porta; 
        $this->cor=$cor; 
        $this->marca=$marca; 
        
    }

}

$renault = new Car(4, "Prata", "Renault");

echo"O carro é da marca $renault->marca e tem a cor $renault->cor<br>"; 

$chevrolet = new Car (4, "Vermelho", "Chevrolet"); 

echo"O carro é da marca $chevrolet->marca e tem a cor $chevrolet->cor<br>"; 
