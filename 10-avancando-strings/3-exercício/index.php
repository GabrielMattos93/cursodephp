<?php

$arr = [
    'porta' => 100, 
    'macaneta' =>5, 
    'motor' => 2000, 
    'retrovisor' =>8, 
];

function itensCaros ($arr) {

    $arritensCaros =[]; 

  foreach($arr as $item  => $preco) {
      if($preco > 10)

    array_push($arritensCaros, $item); 
  }
  return $arritensCaros; 
}

$novoArr = itensCaros($arr); 

print_r($novoArr); 
