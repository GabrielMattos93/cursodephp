<?php

$x = 10; 

echo "O valor é $x global"; 

function teste () { 

$x= 5; 

echo "O valor é $x local"; 

} 

$x = 5; 

echo "O valor é $x local"; 

function testando () { 

} 


// Definir o nome em uma variável global e o whatsapp em uma variável local.


$nome = "Gabriel"; 

echo" O nome é $nome global <br>"; 


function nome () { 
}
$whatsapp = 21984720221; 

echo" O número do whatsapp é $whatsapp local <br>"; 

function whatsapp () { 

}  

