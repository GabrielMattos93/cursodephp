<?php

// Definindo funções

//home
function home () {
    echo"Olá Mundo <br>";
}

//about

function about () {
    echo "Página Sobre a Empresa<br>"; 
}

//services 

function services () {
    echo"Página de Serviços<br>"; 
}

//portfolio

function portfolio () {
    echo "Página de Portfólio<br>"; 
}

//Contact

function contact () {
    echo "Página de Contatos<br>"; 
}

// Usando Variável

function website () {

    $name = "(Website PHP) <br>"; 
    $url = "abc.com"; 
    echo"Meu site se chama $name e você pode acessar através do link $url"; 
}

home(); 
about(); 
services(); 
portfolio(); 
contact(); 
website();