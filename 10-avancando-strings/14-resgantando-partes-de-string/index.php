<?php 

$str="Está é a minha string"; 

$minha=substr($str,10, 6); // STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA

echo $str . "<br>"; 
echo $minha . "<br>"; 

$str2="Testando nova string<br>"; 

$novaString=substr($str2, 8); 

echo $novaString; 