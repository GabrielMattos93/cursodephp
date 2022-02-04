<?php

$method =  $_SERVER ['REQUEST_METHOD']; 

if(isset($_POST['nome'])){
    $nome = $_POST['nome']; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php
if($method == 'GET'): 
?>
<form action="" method="POST">
<input type="text" name="nome" placeholder="Digite seu nome">
<br>
<input type="submit" value="Enviar">
</form>
<?php
else:
?>
<h1> O seu nome é <?php echo $nome?> </h1>
<?php
endif;
?>

   
</body>
</html>