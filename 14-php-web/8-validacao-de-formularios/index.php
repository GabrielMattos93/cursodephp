<?php

$validacoes = []; 
if(count($_POST) > 0){

    if(($_POST['nome'] === "")){
        
        $validacoes[] = "Por favor, preencha o nome do usuário!"; 
    }

    if(($_POST['email'] === "")){
        
        $validacoes[] = "Por favor, preencha o email do usuário!"; 
    }

 if($_POST['senha'] != $_POST['confirmar-senha']){
   
    $validacoes[] = "As senhas devem ser iguais!"; 
 }
}
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registro</title>
</head>
<body>
    <?php if(count($validacoes));  ?>
    <ul>
        <?php foreach($validacoes as $validacao): ?>
            <li> <?php echo $validacao ?></li>
            <?php endforeach; ?>
    </ul>

    <div>
        <fieldset>
            <form action="" method="POST">
                <h1>
                    Faça seu Registro
                </h1>
                <div>
                    <input type="text" name="nome" placeholder="Digite seu nome">
                </div>
                <br>
                <div>
                    <input type="text" name="email" placeholder="Digite seu email">
                </div>
                    <br>
                <div>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <br>
                <div>
                    <input type="password" name="confirmar-senha" placeholder="Digite novamente a sua senha">
                </div>
                <br>
                <div>
                    <input type="submit" value="Enviar">
                </div>
                <br>
            </form>
        </fieldset>
    </div>
    
</body>
</html>