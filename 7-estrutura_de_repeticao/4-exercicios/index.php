<?php

$x = 4; 
$limite = 30; 
while($x < $limite) {

    echo "Executando o loop $x <br>";

    // interrompendo o loop. 
    if($x===24){
        echo"Parando o loop"; 
        break;
    }
  

    $x+=2; 
}

