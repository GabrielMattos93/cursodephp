<?php

if(isset($_POST['disciplina'])){

    $disciplina = $_POST['disciplina']; 
    print_r($disciplina); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados por checkbox</title>
</head>
<body>
    <div>
        <fieldset>
            <form action="" method="POST">
                <div>
                    <h1>
                        Selecione as Opções
                    </h1>
                    <p>Selecione uma disciplina de sua preferência</p>
                </div>
                <div>
                    <input type="checkbox" name="disciplina[]" value="portugues">Português
                </div>
                <div>
                    <input type="checkbox" name="disciplina[]" value="matematica">Matemática
                </div>
                <div>
                    <input type="checkbox" name="disciplina[]" value="Geografia">Geografia
                </div>
                <div>
                    <input type="checkbox" name="disciplina[]" value="historia">História
                </div>
                <br>
                <div>
                    <input type="submit" value="Enviar">
                </div>

                
                
            </form>
        </fieldset>
    </div>
    
</body>
</html>