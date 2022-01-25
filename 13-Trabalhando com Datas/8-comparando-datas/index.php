<?php

$dataA = new DateTime(); 
$dataB = new DateTime(); 

$dataC = new DateTime(); 

$dataB->setTime(2022, 10,29); 
$dataC->setTime(2022, 10,29);

if($dataB > $dataA) {
    echo "A data B é maior que a data A <br>"; 
}

if($dataB < $dataA) {
    echo "A data B é menor que a data A <br>"; 
}

if($dataB == $dataC) {
    echo "As datas B e C são iguais <br>"; 
}