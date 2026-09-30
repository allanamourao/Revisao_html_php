<?php
$numero1 = (float)$_POST["numero1"];
$numero2 = (float)$_POST["numero2"];
$calculo = $_POST["calculo"];

if($calculo == "Somar"){
    $resultado = $numero1 + $numero2;
}elseif($calculo == "Subtrair"){
    $resultado = $numero1 - $numero2;
}elseif($calculo == "Multiplicar"){
    $resultado = $numero1 * $numero2;
}else{
    $resultado = $numero1 / $numero2;
}

require_once "view_saida.php";
?>