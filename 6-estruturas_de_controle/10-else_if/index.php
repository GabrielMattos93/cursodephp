<?php 

$a = 10; 
$b = 5;
$c = 6;

//Executando if e else if quando ambos são true

if($a > $b) {
    echo"Entrou no if<br>";                        
}else if ($a > $c) {                                     

    echo "Entrou no else if<br>"; 
}


//Executando if false e else if true


if($a < $b) {
    echo"Entrou no if 2<br>";                        
}else if ($a > $c) {                                     

    echo "Entrou no else if 2<br>"; 
}

//Executando if false e else if quando ambos são false

if($a < $b) {
    echo"Entrou no if 3<br>";                        
}else if ($a < $c) {                                     

    echo "Entrou no else if 3<br>"; 
}