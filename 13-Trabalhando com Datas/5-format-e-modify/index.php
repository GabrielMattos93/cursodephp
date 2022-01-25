<?php

$data = new DateTime(); 

//Data Atual

echo $data->format('d/m/y') . "<br>"; 
echo $data->format('F j, Y') . "<br><br>"; 

//Data Futura

$data->modify('+5 days'); 

echo $data->format('d/m/y') . "<br>"; 

$data->modify('+5 years'); 

echo $data->format('d/m/y') . "<br>"; 

$data->modify('-15 years'); 

echo $data->format('d/m/y') . "<br>"; 