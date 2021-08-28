<?php

$frase = "Vamos extrair a última ocorrência, ultilizando o método strrpos"; 

$search = strrpos($frase, "extrair"); 

echo"$search<br>"; 

// strrpos != strpos

$frase2 = "Vamos extrair a última ocorrência, ultilizando o método strrpos"; 

$search2 = strpos($frase2, "extrair"); 

echo"$search<br>"; 

$palavra="Gabriel"; 

if(strrpos($frase, "$palavra") === false){

echo "A palavra $palavra, não foi encontrada <br>"; 

}