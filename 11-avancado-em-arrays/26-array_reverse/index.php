<?php

$arr= [1,2,3,4,5,6]; 

$arrRev = array_reverse($arr); 

print_r($arr); 
echo"<br>"; 
print_r($arrRev); 
echo"<br>"; 

// Array com outros tipos de dados

$arr2 = ["Gabriel", 12, true, [1,2,3]]; 

$arrRev2 = array_reverse($arr2); 

print_r($arr2); 
echo"<br>"; 
print_r($arrRev2); 
echo"<br>"; 