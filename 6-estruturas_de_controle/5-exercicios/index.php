<?php
$idade1 = 16; 
$idade2 = 18; 
$idade3 = 26; 

$maioridade = 18; 

$msg = "Você é maior de idade"; 

if($idade1 >= $maioridade) {

    echo" 1 .";                    // (False) Usuário menor de idade.
    echo $msg; 
    echo"<br>";
}  
else {
    echo "Não é maior de idade <br>"; 
    }

if($idade2 >= $maioridade) {

    echo "2 ."; 
    echo $msg; 
    echo"<br>";

}

if($idade3 >= $maioridade) {
    echo"3. "; 
    echo$msg; 
    echo"<br>";

}