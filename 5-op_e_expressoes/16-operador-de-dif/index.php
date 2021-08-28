<?php

$a = 3; 
$b = 4; 

if($a!= $b) { 
 echo "Testando diferença <br> "; 
}

if(false != "teste") { 
 echo "Testando diferença 3 <br> "; 
}  

if(3 != "3") { 
 echo "Testando diferença 4 <br> ";   // Os valores são iguais e não são impressos na tela. 
} 


if(3 != "5") { 
 echo "Testando diferença 5 <br> "; 
} 
