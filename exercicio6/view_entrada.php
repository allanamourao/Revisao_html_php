<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
 </head>
 <body>
    <header>
        <h1>Conversor de Temperatura</h1>
    </header>
    <main>
        <form action="temperaturaController.php" method="post">
            <label for="celsius">Temperatura em Celsius</label>
            <br>
            <input type="number" id="celsius" name="celsius">
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
 </body>
 </html>