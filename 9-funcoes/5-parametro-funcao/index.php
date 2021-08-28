<?php

function velocidadeMaxima ($vel) {

    echo"A velocidade do carro é de $vel km/h <br>"; 
}


velocidadeMaxima (200); 
velocidadeMaxima (300); 
velocidadeMaxima (100); 
velocidadeMaxima (400);

//Mais Parâmentros

function animal($nome, $animal, $raca) {
echo "O $nome é um $animal  $raca <br>"; 

}

animal("Bradock", "Gato","Vira-lata"); 
animal("Bobby", "Cachorro","Pastor Alemão"); 
animal("Bradock", "Gato","Vira-lata"); 

//Não será executado
//velocidadeMaxima(); 


// Criando uma condição
//function velocidadeMaxima ($vel) {

   // if(is_int($vel)) {

    //    echo"O carro atinge a velocidade de $vel km/h"; 

 //   }else {
      //  echo"Por favor, passe um número inteiro"; 
   // }
//}


//velocidadeMaxima (60); 