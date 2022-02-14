<?php 
include_once ('helpers/url.php'); 
include_once ('data/categorias.php'); 
include_once ('data/posts.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos-->
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/assets/css/style.css">
     <!--Google Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600&family=Pacifico&display=swap" rel="stylesheet">

    <title>Blog Codando</title>
</head>
<header>
    <a href="<?php echo $BASE_URL ?>" id="logo"> 
        <img src="<?php echo $BASE_URL ?>/assets/images/logo.png">
    </a> 
    <nav> 
        <ul id="navbar">
        <li><a href="<?php echo $BASE_URL ?>"class="nav-link"> Principal</a></li> 
        <li><a href="#0"class="nav-link"> Categorias</a></li> 
        <li><a href="#0"class="nav-link"> Sobre Nós</a></li> 
        <li><a href="<?php echo $BASE_URL ?>contato.php"class="nav-link"> Contato</a></li> 
        
        </ul>
    </nav>
</header>
<body>