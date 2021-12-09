<?php

$pessoa = new Class() {

   public $nome = "Gabriel"; 

   public function dizerNome() {
    echo"O meu nome é $this->nome <br>"; 
   }
}; 

echo $pessoa->nome . "<br>"; 

$pessoa->dizerNome(); 