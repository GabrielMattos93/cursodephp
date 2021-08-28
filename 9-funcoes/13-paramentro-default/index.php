<?php 

function teste ($a ="teste" ) {

    echo "O valor de A é: $a . <br>"; 
}

teste(); 
teste("asd"); 

function testando($b, $a = "x"){

    echo "O valor de a é: $a e o de b é $b . <br>"; 
}

testando();
testando("1"); 

testando("1", "2"); 