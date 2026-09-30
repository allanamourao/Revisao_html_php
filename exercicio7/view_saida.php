<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
 </head>
 <body>
    <header>
        <h1>Salário Atualizado</h1>
    </header>
    <main>
        <p>Funcionário(a): <?= $nome ?> </p>
        <p>Cargo: <?= $cargo ?> </p>
        <br>
        <p>Salário Atual: <?= $salario ?></p>
        <p>Aumento: <?= $valorAumento ?></p>
        <br>
        <p>Novo Salário: <?= $salarioFinal ?> </p>
    </main>
 </body>
 </html>