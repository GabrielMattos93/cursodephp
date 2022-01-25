<?php

$nascimento = mktime(11, 35, 33, 11,29,1993); // Formato inglês, onde o mês vem primeiro.

echo $nascimento .  "<br>"; 

//Formatando a data

$nascimentoformatado = date('d/m/Y', $nascimento); 

echo $nascimentoformatado; 
