<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
 </head>
 <body>
    <header>
        <h1>Valor da Compra</h1>
    </header>
    <main>
        <form action="descontoController.php" method="post">
            <label for="nomeCliente">Nome do Cliente</label>
            <br>
            <input type="text" id="nomeCliente" name="nomeCliente">
            <br><br>
            <label for="nomeProduto">Nome do Produto</label>
            <br>
            <input type="text" id="nomeProduto" name="nomeProduto">
            <br><br>
            <label for="preco">Preço do Produto</label>
            <br>
            <input type="number" id="preco" name="preco">
            <br><br>
            <label for="quantidade">Quantidade</label>
            <br>
            <input type="number" id="quantidade" name="quantidade">
            <br><br>
            <button type="submit">Finalizar Compra</button>
        </form>
    </main>
 </body>
 </html>