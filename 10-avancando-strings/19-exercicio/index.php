<?php

//Convertendo alguns conceitos para array (Carro, Navio, helicóptero, Barco e Jangada)

$str = "Carro, Navio, helicóptero, Barco, Jangada";

$transp = explode(" ", $str); 

for($i=0; $i < count($transp); $i++){

    echo"Item: $transp[$i]<br>"; 
}