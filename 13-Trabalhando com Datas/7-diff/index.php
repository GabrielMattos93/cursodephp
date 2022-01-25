<?php

$dataA = new DateTime(); 
$dataB = new DateTime(); 

$dataA->SetDate(2021, 12, 25); 
print_r($dataA); 
echo "<br>"; 

$dataB->SetDate(2021, 12, 25); 
print_r($dataB); 
echo "<br>"; 

$diferença = $dataA->diff($dataB); 

print_r($diferença); 
echo "<br>"; 

echo $diferença->format("%a days"); 