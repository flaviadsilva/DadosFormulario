<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Soma de Números</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Soma de dois números</h2>

<form method="POST">

<input type="number" name="num1" placeholder="Digite o número 1" required>

<input type="number" name="num2" placeholder="Digite o número 2" required>

<button type="submit">Somar</button>

</form>

<?php

if(isset($_POST["num1"]) && isset($_POST["num2"])){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $resultado = $num1 + $num2;

    echo "<p class='resultado'>Resultado da soma: $resultado</p>";
}

?>

</div>

</body>
</html>