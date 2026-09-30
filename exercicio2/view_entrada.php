<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
 </head>
 <body>
    <header>
        <h1>Calculadora de operações simples</h1>
    </header>
    <main>
        <form action="calculadoraController.php" method="post">
            <label for="numero1">Numero 1</label>
            <br>
            <input type="number" id="numero1" name="numero1">
            <br><br>
            <label for="numero2">Numero 2</label>
            <br>
            <input type="number" id="numero2" name="numero2">
            <br><br>
            <select name="calculo" id="calculo">
                <option value="selecionar" selected disabled>Selecionar...</option>
                <option value="Somar">Somar</option>
                <option value="Subtrair">Subtrair</option>
                <option value="Multiplicar">Multiplicar</option>
                <option value="Dividir">Dividir</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
 </body>
 </html>