<?php

$textoHtml="<p>Olá estamos testando o parágrafo.</p><div>Uma div </div><p> Outro Parágrafo"; 

echo $textoHtml;


//Vamos Testar a strip_trag

$strip_tags= strip_tags($textoHtml); 
echo $strip_tags; 