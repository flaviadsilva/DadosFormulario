<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Formulário de Cadastro</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome">

<input type="email" name="email" placeholder="Digite seu email">

<input type="number" name="idade" placeholder="Digite sua idade">

<button type="submit">Cadastrar</button>

</form>

<?php

if(isset($_POST["nome"]) || isset($_POST["email"]) || isset($_POST["idade"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if(empty($nome) || empty($email) || empty($idade)){
        echo "<p class='erro'>Preencha todos os campos</p>";
    } else {

        echo "<div class='resultado'>";
        echo "<p><strong>Cadastro realizado com sucesso!</strong></p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Idade: $idade</p>";
        echo "</div>";
    }

}

?>

</div>

</body>
</html>