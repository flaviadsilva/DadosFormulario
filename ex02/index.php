<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Cadastro</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome" required>

<input type="number" name="idade" placeholder="Digite sua idade" required>

<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["nome"]) && isset($_POST["idade"])){

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "<p class='resultado'>Nome: $nome</p>";
    echo "<p class='resultado'>Idade: $idade anos</p>";

    if($idade >= 18){
        echo "<p class='mensagem'>Você é maior de idade</p>";
    } else {
        echo "<p class='mensagem'>Você é menor de idade</p>";
    }

}

?>

</div>

</body>
</html>