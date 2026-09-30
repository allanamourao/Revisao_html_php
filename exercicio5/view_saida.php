<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
 </head>
 <body>
    <header>
        <h1>Valor Final da compra</h1>
    </header>
    <main>
        <p>Nome do cliente: <?= $nomeCliente ?> </p>
        <p>Nome do Produto: <?= $nomeProduto ?> </p>
        <br>
        <p>Preço Unitário: <?= $preco ?> </p>
        <p>Quantidade: <?= $quantidade ?></p>
        <br>
        <p>Subtotal: <?= $total ?> </p>
        <p>Desconto: <?= $valorDesconto ?> </p>
        <br>
        <p>Total: <?= $totalFinal ?> </p>
    </main>
 </body>
 </html>