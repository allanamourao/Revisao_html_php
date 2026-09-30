<?php
$nomeCliente = $_POST["nomeCliente"];
$nomeProduto = $_POST["nomeProduto"];
$preco = (float)$_POST["preco"];
$quantidade = $_POST["quantidade"];

$total = $preco * $quantidade;

if($total >= 200){
    $valorDesconto = $total * 0.10;
    $totalFinal = $total - $valorDesconto;
}else{
    $valorDesconto = 0;
    $totalFinal = $total;
}
require_once "view_saida.php";
?>