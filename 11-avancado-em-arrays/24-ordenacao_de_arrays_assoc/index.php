<?php

//(asort, arsort, ksort,krsort)

//Ordenação em ordem crescente

$arr = [
    'Gabriel'=> 27, 
    'Pedro' => 23, 
    'Daiane'=> 18, 
    'Júlia' => 20
]; 

asort($arr);
print_r($arr); 
echo"<br>";

// Ordenação reversa

$arr2 = [
    'Gabriel'=> 19, 
    'Pedro' => 44, 
    'Daiane'=> 29, 
    'Júlia' => 35
]; 

arsort($arr2);
print_r($arr2); 
echo"<br>";

// Ordenção pelos valores da chave em ordem alfabética

$arr3 = [
    'Gabriel'=> 27, 
    'Pedro' => 23, 
    'Daiane'=> 18, 
    'Júlia' => 20
]; 

ksort($arr3);
print_r($arr3); 
echo"<br>";

//Ordenação em ordem decrescente pelos valores da chave

$arr4= [
    'Gabriel'=> 27, 
    'Pedro' => 23, 
    'Daiane'=> 18, 
    'Júlia' => 20
]; 

krsort($arr4);
print_r($arr4);
echo"<br>";

