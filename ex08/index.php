<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Seleção de Cidade</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Formulário</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome" required>

<select name="cidade" required>
<option value="">Selecione uma cidade</option>
<option value="Sapucaia">Sapucaia</option>
<option value="Esteio">Esteio</option>
<option value="São Leopoldo">São Leopoldo</option>
<option value="Porto Alegre">Porto Alegre</option>
</select>

<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["nome"]) && isset($_POST["cidade"])){

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];

    if($cidade != ""){
        echo "<p class='resultado'>$nome mora em $cidade</p>";
    }

}

?>

</div>

</body>
</html>