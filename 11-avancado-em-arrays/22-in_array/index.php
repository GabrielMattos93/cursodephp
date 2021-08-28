<?php

$arr = ['Banana', 'Maça', 'Batata', 'Pêra', 'Laranja'];

if(in_array("Laranja", $arr)) {

    echo"Há o item laranja no array<br>"; 
}else{
    echo"Não Há o Item Laranja no Array<br>"; 
}

//Com variáveis
//Nesse caso o item não existe no array

$clube = "fluminense"; 

if(in_array("fluminense", $arr)) {

    echo"Há o item fluminense no array<br>"; 
}else{
    echo"Não Há o Item Fluminense no Array<br>"; 
}