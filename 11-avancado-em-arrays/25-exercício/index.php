<?php

//Ranking

$ranking = [
    
    "Gabriel" => 256,
    "Maria" => 458,
    "Lucas" => 124,
    "Edilene" => 78,
    "Daiane" =>149,
    "Pedro" => 200
]; 

arsort($ranking); 

?>

<title> Ranking de Jogadores</title>
<h1> 
    Ranking
</h1>
<ol>
<?php foreach ($ranking as $nome=>$pontos); ?>
<li><?= $nome ?> -> <?= $pontos ?> Pontos</li>

<?php endforeach; ?>

</ol>