<?php 

class Car {

    public $rodas = 4;
    public $aro =20; 
    public $cor = "Azul";
    
    function ligar() {

        echo "VRUUUMMM <br>"; 
    }
}

$ferrari = new Car; 

echo $ferrari-> rodas . "<br>"; 
echo $ferrari-> aro . "<br>"; 
echo $ferrari-> cor . "<br>"; 

$ferrari->ligar(); 