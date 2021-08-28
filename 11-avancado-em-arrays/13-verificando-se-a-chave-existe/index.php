<?php

$arr = [
    'nome' => 'Gabriel', 
    'idade'=> 27,  
    'torcedor'=>'Fluminense', 
]; 

if(array_key_exists("torcedor", $arr)) {

    echo"A chave existe <br>"; 

}else{

    echo"A chave não existe <br>";
}

//Função isset faz a mesma função
//Exemplo

$arr = [
    'nome' => 'Gabriel', 
    'idade'=> 27,  
    'torcedor'=>'Fluminense', 
]; 

if(isset($arr['torcedor'])) {

    echo"A chave ISSET existe"; 
}else {

    echo "A chave ISSET, não existe";
}
