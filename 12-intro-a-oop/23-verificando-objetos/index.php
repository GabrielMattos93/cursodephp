<?php

class Humano {

    public function falar() {
        echo"Olá"; 
    }
}

$gabriel = new Humano; 

$teste = 100; 

if(is_object($gabriel)) {
    echo"É um objeto <br>"; 
}else {
    echo"Não é um objeto"; 
}

if(is_object($teste)) {
    echo"É um objeto <br>"; 
}else {
    echo"Não é um objeto"; 
}

echo get_class($gabriel) . "<br>"; 

if(method_exists($gabriel, "falar")) {
    echo"O método existe <br>"; 
}else {
    echo"O método não existe <br>"; 

}

if(method_exists($gabriel, "gritar")) {
    echo"O método existe <br>"; 
}else {
    echo"O método não existe <br>"; 

}