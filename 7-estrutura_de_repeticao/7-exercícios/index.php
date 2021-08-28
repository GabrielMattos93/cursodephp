<?php

//Imprimi todos os elementos

$arr= [10,20,30,40,50,60,70,80,90,100];

$i = 0; 

while($i <count ($arr)) {

    $numeroatual= $arr[$i]; 

    //Pular a execução

    if($numeroatual == 30 || $numeroatual == 40) {
        $i++;
        continue;
    }

    echo"Elementos: $arr[$i]<br>"; 
$i++;
}