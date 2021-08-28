<?php

// Criar uma estrutura de condições que defina a idade de uma pessoa e apartir disso diga se ela é de menor ou de maior.

$pessoa= [
'nome'=>'Gabriel Mattos', 'idade' => 27, 
'profissão' => 'desenvolvedor php', 
'graducao' => 'administração', 
];

$maioridade =18; 

// Dasafio 

if($pessoa['idade']>= $maioridade){ 
echo"<br>";
echo" A pessoa é maior da idade"; 
}

// Caso a idade da pessoa seja menor que 18 não será impresso nada na tela. 
