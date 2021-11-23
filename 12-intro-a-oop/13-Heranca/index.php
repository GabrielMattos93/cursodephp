<?php 

class Humano {

    public $idade = 27; 

    public function falar() {

        echo "Minha idade é: <br>";  
    }

    //Function private

    private function gritar() {

        echo "E EU AMO PHP <br>";
    }

    //Como a function é private, terei de ter alguma funcão pública para acessar o método

    public function acessaGritar(){
        $this->gritar();
        
    }
    //Fuction protected

    protected function falarBaixo(){

        echo"html é linguagem de marcação"; 

    }

    //Não iremos conseguir acessar a function com esse método então faremos outro.

    public function acessefalarBaixo(){
        $this->falarBaixo(); 
    }

    //Agora sim consigo acessa a function. Vejamos na prática
    
}


class Programador extends Humano {


}

$gabriel = new Humano;
$gabriel->falar();
echo $gabriel->idade . "Anos  <br>";
//Chamando o método da function private
$gabriel->acessaGritar();
$gabriel->acessefalarBaixo();




$miguel = new Programador; 
$miguel->falar(); 
echo $miguel->idade . "Anos  <br>";
//Chamando o método da function private
$miguel->acessaGritar();

