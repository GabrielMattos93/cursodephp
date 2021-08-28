<?php 

include_once "backend.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <h1>Olá <?= $nome ?></h1>
    <h3>Confira nossas promoções nos principais produtos:</h3>
    <label>Aproveite nossas ofertas hoje mesmo </label>
    <ul>
    <?php foreach ($produto as $produto): ?>
    <li><?=$produto?>
    <?php endforeach ?>
    </ul>
</head>
<body>
    
</body>
</html>