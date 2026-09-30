<?php
$nome = $_POST["nome"];
$salario = (float)$_POST["salario"];
$cargo = $_POST["cargo"];

if($cargo == "Estagiário"){
    $valorAumento = $salario * 0.10;
    $salarioFinal = $salario + $valorAumento;
}elseif($cargo == "Assistente"){
    $valorAumento = $salario * 0.08;
    $salarioFinal = $salario + $valorAumento;
}else{
    $valorAumento = $salario * 0.05;
    $salarioFinal = $salario + $valorAumento;
}
require_once "view_saida.php";
?>