<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Escolha de Sexo</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Formulário</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome" required>

<div class="radio-group">
<label>
<input type="radio" name="sexo" value="Masculino" required>
Masculino
</label>

<label>
<input type="radio" name="sexo" value="Feminino">
Feminino
</label>

<label>
<input type="radio" name="sexo" value="Outro">
Outro
</label>
</div>

<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["nome"]) && isset($_POST["sexo"])){

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];

    echo "<div class='resultado'>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Sexo selecionado: $sexo</p>";
    echo "</div>";
}

?>

</div>

</body>
</html>