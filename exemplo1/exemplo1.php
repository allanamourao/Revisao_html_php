<?php
    $nome = "Mateus";

    $arrayInformacoes = [
        [
            "nome" => "Mateus",
            "cpf" => "000.000.000-00",
            "idade" => 16
        ],
        [
            "nome" => "Samuel",
            "cpf" => "000.000.000-00",
            "idade" => 23
        ]
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 PHP + HTML</title>
</head>
<body>
    <h1>Exemplo de cadastro</h1>
    <p><?= $nome ?></p>
    <hr>
    <h1>Informações do array</h1>
    <?php
        foreach($arrayInformacoes as $informacao){
    ?>
        <p>Exibindo informações</p>
        <p>Nome: <?= $informacao["nome"] ?></p>
        <p>Idade: <?= $informacao["idade"] ?></p>
        <p>CPF: <?= $informacao["cpf"] ?></p>
    <?php } ?>
</body>
</html>