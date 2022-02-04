<?php 

$usuario = [
    'nome'=> 'Gabriel Mattos', 
    'idade'=>28, 
    'profissao'=>'Programador', 
]; 

if($usuario) 

$nome = $usuario['nome']; 
$idade = $usuario['idade']; 
$profissao=$usuario['profissao']; 
 
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

 <form action="" method="POST">
     <input type="text" name="nome" value="<?= $nome ?>">
     <br>
     <input type="text" name="idade" value="<?= $idade ?>">
     <br>
     <input type="text" name="profissao" value="<?= $profissao ?>">
     <br>
     <input type="submit"  value="Enviar">
     <br>
 </form>
     
 </body>
 </html>