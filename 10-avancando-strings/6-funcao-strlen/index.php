<?php

$str1 = "Está string é muito grande"; 
$str2 = "Esta string não"; 

echo strlen ($str1) . "<br>"; 
echo strlen ($str2) . "<br>"; 

if ($str1 > $str2){
    echo"A string 1 é maior que a 2"; 
}else {
    echo"A string 2 é maior que a 1"; 
}