<?php

class Humano {

}

class Animal {

}

class Professor extends Humano{

}

$gabriel = new Humano; 

if($gabriel instanceof Humano) {

    echo "Gabriel é um ser Humano<br>"; 

}else{

    echo "Gabriel não é um ser Humano<br>";  
}

$cachorro = new Animal; 

if($cachorro instanceof Humano){
  
    echo "O cachorro é um ser Humano<br>"; 

}else{
    echo "O cachorro não é um ser Humano<br>"; 

}

$fred= new Professor; 

if($fred instanceof Professor){
    echo "Fred é um Professor<br>"; 
}else {
    echo "Fred não é um Professor<br>"; 
}

if($fred instanceof Humano){
    echo "Fred é um ser Humano<br>"; 
}else {
    echo "Fred não é um ser Humano<br>"; 
}

// Cachorro 

if($cachorro instanceof Professor){
    echo "O cachorro é um Professor<br>"; 
}else {
    echo "O cachorro não é um Professor<br>"; 
}

if($cachorro instanceof Humano){
    echo "O cachorro é um ser Humano<br>"; 
}else {
    echo "O cachorro não é um ser Humano<br>"; 
}

