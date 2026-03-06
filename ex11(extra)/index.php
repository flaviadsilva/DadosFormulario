<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Formulário de Contato</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Seu nome">

<input type="email" name="email" placeholder="Seu email">

<input type="text" name="assunto" placeholder="Assunto">

<textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>

<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["nome"])){

    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    if(empty($nome) || empty($email) || empty($assunto) || empty($mensagem)){

        echo "<p class='erro'>Preencha todos os campos</p>";

    } else {

        echo "<div class='resultado'>";
        echo "<p><strong>Mensagem enviada com sucesso!</strong></p>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Assunto:</strong> $assunto</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
        echo "</div>";

    }

}

?>

</div>

</body>
</html>