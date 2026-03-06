<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Primeiro Formulário</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Digite seu nome</h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Digite seu nome" required>
    <button type="submit">Enviar</button>
</form>

<?php
if(isset($_POST["nome"])){

    $nome = $_POST["nome"];

    echo "<p class='resultado'>Olá, $nome!</p>";
 echo
}
?>

</div>

</body>
</html>