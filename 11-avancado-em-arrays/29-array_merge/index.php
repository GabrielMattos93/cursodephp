<?php

$arr =[1,2,3]; 
$arr2 = [5,8,45,56]; 
$arr3= ["Gabriel", [4,12], true, false, 1.5]; 

$arrayMerge = array_merge($arr, $arr2, $arr3); 

print_r($arrayMerge); 
echo"<br>"; 