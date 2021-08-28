<?php

$lista = ["arroz", "feijão", "farinha", "trigo", "sal"]; 

function lista($arr) {

    $string = "Você levou estes itens do mercado"; 

    for ($i = 0; $i < count($arr); $i++) {
    
        if ($i +1 == count($arr)) {
            $string .= "$arr[$i], ";  
        }else {

              $string .= "$arr[$i], "; 

        }

        $string .= "$arr[$i]. ";   

    } 

    return $string; 

}

echo lista($lista); 