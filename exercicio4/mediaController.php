<?php
$nome = $_POST["nome"];
$nota1 = (float)$_POST["nota1"];
$nota2 = (float)$_POST["nota2"];

$media = ($nota1 + $nota2) / 2;

if($media >= 7){
    $situacao = "Aluno Aprovado";
}elseif($media >= 5){
    $situacao = "Aluno em Recuperação";
}else{
    $situacao = "Aluno Reprovado";
}
require_once "view_saida.php";
?>