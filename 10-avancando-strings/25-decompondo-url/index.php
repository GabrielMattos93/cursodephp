<?php

$url = "https://www.google.com"; 

$urldecom=parse_url($url); 

print_r($urldecom); 

echo"<br>";

$url2 = "https://brutecode.com.br/orcamento"; 

$urldecom2 = parse_url($url2); 

print_r($urldecom2);
echo"<br>";

$url3 = "https://brutecode.com.br/blog/?ultimas-noticias.php"; 

$urldecom3 = parse_url($url3); 

print_r($urldecom3);
echo"<br>";

$url4 = "https://brutecode.com.br/gabrielmattos/?ultimas-noticias.php?id=2&o-php-8-ja-chegou"; 

$urldecom4 = parse_url($url4); 

print_r($urldecom4);
echo"<br>";