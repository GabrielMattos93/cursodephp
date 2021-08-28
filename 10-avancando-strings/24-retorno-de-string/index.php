<?php

$frase ="Testando a string pra ver se dar certo"; 
$search = strstr($frase, "pra"); 

echo "$search<br>"; 

if(strstr($frase, ".NET")=== false) {

    echo"Não encontramos a referida string!"; 
    
}