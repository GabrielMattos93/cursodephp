<?php

class Humano {

    public $maos = 2; 
    public $pernas = 2;
    
    public function falar(){

        echo "Olá, sou um ser humano com: <br>";  
    }
}

class Professor extends Humano {
        
   public  $disciplina = "Português"; 

    public function estarLecionando() {

        echo "O professor está dando aula de $this->disciplina . <br>";
    }
}

$maria = new Humano; 
$maria->falar();
echo $maria->maos . " Mãos e <br>";
echo $maria->maos . " Pernas <br>";

//Classe filha 

$jose = new Professor; 
echo $jose->maos . " Mãos e <br>";
echo $jose->pernas . " Pernas <br>";

$jose->falar();
$jose->estarLecionando();