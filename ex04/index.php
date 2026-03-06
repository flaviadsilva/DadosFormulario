<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Calculadora Simples</h2>

<form method="POST">

<input type="number" name="num1" placeholder="Número 1" required>

<input type="number" name="num2" placeholder="Número 2" required>

<select name="operacao">
    <option value="somar">Somar</option>
    <option value="subtrair">Subtrair</option>
    <option value="multiplicar">Multiplicar</option>
    <option value="dividir">Dividir</option>
</select>

<button type="submit">Calcular</button>

</form>

<?php

if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacao"])){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if($operacao == "somar"){
        $resultado = $num1 + $num2;
    }
    elseif($operacao == "subtrair"){
        $resultado = $num1 - $num2;
    }
    elseif($operacao == "multiplicar"){
        $resultado = $num1 * $num2;
    }
    elseif($operacao == "dividir"){
        if($num2 != 0){
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Não é possível dividir por zero";
        }
    }

    echo "<p class='resultado'>Resultado: $resultado</p>";
}

?>

</div>

</body>
</html>