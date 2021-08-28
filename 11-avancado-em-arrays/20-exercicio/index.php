<?php

//Imprimindo o nome e a idade de alguns jogadores em uma tabela

$jogador = [
    'Fred' => 37,
    'Nenê' => 39,
    'Kayky' => 17,
    'Caio Paulista' => 22
];

?>

<table border="1">
    <tr>
        <th>Nome:</th>
        <th>Idade:</th>
    </tr>
    <?php foreach($jogador as $nome => $idade): ?>
    <tr>
        <td><?=$nome;?></td>
        <td><?=$idade;?></td>
    </tr>
<?php endforeach; ?>
</table>