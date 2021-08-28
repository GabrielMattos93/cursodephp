<?php

// Criar um array com as carecterísticas de um carro. 

$carro =['marca' => 'bmw',
'rodas' => '4',
'teto_solar'=> 'true',
'velocidade_max' => '1000km/h',  
'blindado' => false,
];

print_r ($carro);

$marca = $carro['marca'];
$velocidade_max = $carro['velocidade_max']; 
echo"<br>";

echo "O carro é da marca $marca e atinge no máximo $velocidade_max";


// Criar um array próprio que defina os títulos do fluminense fc. 

$flu = ['carioca' => '2012', 
'brasileiro'=> '2012', 
'libertadores' => 'Não tem', 
'mundial' => '1952', 
'ligas' => 'Primeira Liga',
]; 

print_r ($flu); 

$carioca = $flu['carioca']; 
echo"<br>";
$brasileiro = $flu[	'brasileiro']; 
echo"<br>";
$libertadores = $flu['libertadores'];
echo"<br>";
$mundial = $flu['mundial']; 
echo"<br>";
$ligas = $flu['ligas']; 

echo"O campeonato carioca mais emociontante do fluminense foi o de $carioca , no mesmo ano o fluminense fc também conquistou o título brasileiro de $brasileiro <br>
infelizmente, o clube deixou de ganhar uma libertadores em 2008, sendo assim o clube $libertadores libertadores da américa, a copa rio de $mundial , pra muitos é considerado título mundial<br>
já em 2016 o fluminense conquistou a $ligas, com gol do nosso kuririn.";


// Fim do excercício