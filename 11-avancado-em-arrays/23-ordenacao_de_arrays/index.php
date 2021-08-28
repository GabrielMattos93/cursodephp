<?php

//Ordenando o array em ordem crescente

$arr = [2,1,4,5,7,234,456,98]; 

sort($arr);
print_r($arr); 
echo"<br>";


//Ordenando o array em ordem decrescente

rsort($arr); 
print_r($arr); 
echo"<br>";


//Ordenando o array em ordem alfabética

$nome =['João', 'Gabriel', 'Amanda', 'Sandra', 'Ana Júlia', 'Maria Isabel']; 

sort($nome);
print_r($nome); 
echo"<br>";