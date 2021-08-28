<?php

//Vamos transformar a string "este item está em promoção"; 
//em "Este item está em PROMOÇÃO"; 

$frase="este item está em"; 
$promo="promoção"; 

echo ucfirst($frase) . strtoupper($promo); 