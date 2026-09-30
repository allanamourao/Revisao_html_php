<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
 </head>
 <body>
    <header>
        <h1>Cálculo de Salário</h1>
    </header>
    <main>
        <form action="salarioController.php" method="post">
            <label for="nome">Nome do Funcionário</label>
            <br>
            <input type="text" id="nome" name="nome">
            <br><br>
            <label for="salario">Salário atual</label>
            <br>
            <input type="number" id="salario" name="salario">
            <br><br>
            <select name="cargo" id="cargo">
                <option value="selecionar" selected disabled>Selecionar...</option>
                <option value="Estagiário">Estagiário</option>
                <option value="Assistente">Assistente</option>
                <option value="Analista">Analista</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
 </body>
 </html>