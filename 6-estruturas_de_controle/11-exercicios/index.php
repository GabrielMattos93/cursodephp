<?php 

$vel = 60; 
$velmax= 40; 

// Quando o motorista está em uma velocidade segura

$msg = "Parabéns, você está numa velocidade segura";

if($vel < $velmax) {
    
    echo $msg; 
}else if ($vel == $velmax) {
   
    $msg = "Cuidado, você está no limite de velocidade";

    echo $msg; 

} else { 
    $msg = "Você foi multado, velocidade acima do permitido"; 

    echo $msg; 
}