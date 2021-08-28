<?php

// Trabalhando com variáveis de referência

$x=10; 
$y = & $x; 
echo"o valor é $y";

echo"<br>"; 

// Atribuindo um float a variável

$x =21.23;
$y =& $x; 
echo"O valor é $y";

echo"<br>"; 

// Atribuindo uma string a variável de ref

$x = "Gabriel"; 
$y = & $x; 
echo"o nome da string é $y";  